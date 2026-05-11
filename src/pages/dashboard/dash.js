
      $(document).ready(function () {
        $("#cards").owlCarousel({
          items: 3, // Number of items to display
          loop: false, // Disable infinite loop
          margin: 0, // Space between items
          nav: true, // Show next/prev buttons
          dots: false, // Show pagination dots
          navText: ["‹", "›"], // Custom arrow text
          responsive: {
            0: {
              items: 1, // 1 item on small screens
            },
            768: {
              items: 2, // 2 items on tablets
            },
            1024: {
              items: 3, // 3 items on desktop
            },
          },
          autoplay: false, // Disable autoplay
          smartSpeed: 450, // Animation speed
          navSpeed: 450, // Navigation speed
        });
      });

      $(".cards-list").owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: false,

        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1200: {
            items: 3,
          },
          1500: {
            items: 4,
          },
        },
      });

      const MONTHS = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];
      const DAYS = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"];

      const now = new Date();
      let viewYear = now.getFullYear();
      let viewMonth = now.getMonth();
      let selectedDate = {
        year: now.getFullYear(),
        month: now.getMonth(),
        day: now.getDate(),
      };

      const monthSelect = document.getElementById("monthSelect");
      const yearInput = document.getElementById("yearInput");
      const weekdaysEl = document.getElementById("weekdays");
      const daysGridEl = document.getElementById("daysGrid");

      // Populate month select
      MONTHS.forEach((m, i) => {
        const opt = document.createElement("option");
        opt.value = i;
        opt.textContent = m;
        monthSelect.appendChild(opt);
      });

      monthSelect.addEventListener("change", () => {
        viewMonth = parseInt(monthSelect.value);
        buildGrid();
      });

      yearInput.addEventListener("change", () => {
        const val = parseInt(yearInput.value);
        if (!isNaN(val) && val > 0) {
          viewYear = val;
          buildGrid();
        }
      });

      yearInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter") {
          yearInput.blur();
        }
      });

      function isToday(y, m, d) {
        return (
          y === now.getFullYear() && m === now.getMonth() && d === now.getDate()
        );
      }

      function isSelected(y, m, d) {
        return (
          selectedDate &&
          selectedDate.year === y &&
          selectedDate.month === m &&
          selectedDate.day === d
        );
      }

      function buildWeekdays() {
        weekdaysEl.innerHTML = "";
        DAYS.forEach((d) => {
          const el = document.createElement("div");
          el.className = "weekday";
          el.textContent = d;
          weekdaysEl.appendChild(el);
        });
      }

      function buildGrid() {
        daysGridEl.innerHTML = "";
        monthSelect.value = viewMonth;
        yearInput.value = viewYear;

        // Monday-based week: Mon=0 ... Sun=6
        const firstDow = new Date(viewYear, viewMonth, 1).getDay(); // 0=Sun
        const offset = (firstDow + 6) % 7;
        const daysInMonth = new Date(viewYear, viewMonth + 1, 0).getDate();
        const prevDays = new Date(viewYear, viewMonth, 0).getDate();

        for (let i = offset - 1; i >= 0; i--) {
          daysGridEl.appendChild(
            makeCell(prevDays - i, viewMonth - 1, viewYear, true),
          );
        }
        for (let d = 1; d <= daysInMonth; d++) {
          daysGridEl.appendChild(makeCell(d, viewMonth, viewYear, false));
        }
        const total = offset + daysInMonth;
        const remaining = total % 7 === 0 ? 0 : 7 - (total % 7);
        for (let d = 1; d <= remaining; d++) {
          daysGridEl.appendChild(makeCell(d, viewMonth + 1, viewYear, true));
        }
      }

      function makeCell(day, month, year, isOther) {
        let y = year,
          m = month;
        if (m < 0) {
          m = 11;
          y--;
        }
        if (m > 11) {
          m = 0;
          y++;
        }

        const cell = document.createElement("div");
        cell.className = "day-cell";
        cell.textContent = day;

        if (isOther) cell.classList.add("other-month");
        if (isToday(y, m, day)) cell.classList.add("today");
        if (isSelected(y, m, day)) cell.classList.add("selected");

        cell.addEventListener("click", () => {
          selectedDate = { year: y, month: m, day };
          if (isOther) {
            viewYear = y;
            viewMonth = m;
          }
          buildGrid();
        });

        return cell;
      }

      document.getElementById("prevBtn").addEventListener("click", () => {
        viewMonth--;
        if (viewMonth < 0) {
          viewMonth = 11;
          viewYear--;
        }
        buildGrid();
      });

      document.getElementById("nextBtn").addEventListener("click", () => {
        viewMonth++;
        if (viewMonth > 11) {
          viewMonth = 0;
          viewYear++;
        }
        buildGrid();
      });

      buildWeekdays();
      monthSelect.value = viewMonth;
      yearInput.value = viewYear;
      buildGrid();

      //todo_list

      const taskInput = document.getElementById("taskInput");
      const dateInput = document.getElementById("dateInput");
      const addBtn = document.getElementById("addBtn");
      const taskList = document.getElementById("taskList");
      const emptyMsg = document.getElementById("emptyMsg");
      const toggleBtn = document.getElementById("toggleBtn");
      const statsEl = document.getElementById("stats");

      // Set today's date as default
      const today = new Date();
      const yyyy = today.getFullYear();
      const mm = String(today.getMonth() + 1).padStart(2, "0");
      const dd = String(today.getDate()).padStart(2, "0");
      dateInput.value = `${yyyy}-${mm}-${dd}`;

      const VISIBLE_COUNT = 3;
      let tasks = JSON.parse(localStorage.getItem("todos") || "[]");
      let expanded = false;
      let dragSrc = null;

      function saveTasks() {
        localStorage.setItem("todos", JSON.stringify(tasks));
      }

      function formatDate(val) {
        if (!val) return "";
        const [y, m, d] = val.split("-");
        return `${d}/${m}/${y}`;
      }

      function renderStats() {
        if (!tasks.length) {
          statsEl.textContent = "";
          return;
        }
        const done = tasks.filter((t) => t.done).length;
        statsEl.innerHTML = `<span>${tasks.length}</span> tasks &nbsp;·&nbsp; <span>${done}</span> completed`;
      }

      function render() {
        taskList.querySelectorAll(".task-card").forEach((el) => el.remove());

        if (!tasks.length) {
          emptyMsg.style.display = "";
          toggleBtn.style.display = "none";
          renderStats();
          return;
        }
        emptyMsg.style.display = "none";

        const visible = expanded ? tasks : tasks.slice(0, VISIBLE_COUNT);

        visible.forEach((task, idx) => {
          const card = document.createElement("div");
          card.className = "task-card" + (task.done ? " completed" : "");
          card.draggable = true;
          card.dataset.idx = tasks.indexOf(task);

          card.innerHTML = `
        <div class="drag-handle" title="Drag to reorder">&#8942;&#8942;</div>
        <button class="check-btn${task.done ? " checked" : ""}" title="Mark complete"></button>
        <div class="task-info">
          <div class="task-title">${escHtml(task.title)}</div>
          <div class="task-meta">
            ${task.date ? `[${formatDate(task.date)}]` : ""}
            <span class="task-tag">Auto</span>
          </div>
        </div>
        <button class="del-btn" title="Delete task">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/>
          </svg>
        </button>
      `;

          // Toggle done
          card.querySelector(".check-btn").addEventListener("click", () => {
            tasks[card.dataset.idx].done = !tasks[card.dataset.idx].done;
            saveTasks();
            render();
          });

          // Delete
          card.querySelector(".del-btn").addEventListener("click", () => {
            tasks.splice(card.dataset.idx, 1);
            saveTasks();
            render();
          });

          // Drag events
          card.addEventListener("dragstart", (e) => {
            dragSrc = card;
            card.classList.add("dragging");
            e.dataTransfer.effectAllowed = "move";
          });
          card.addEventListener("dragend", () => {
            card.classList.remove("dragging");
            taskList
              .querySelectorAll(".task-card")
              .forEach((c) => c.classList.remove("drag-over"));
          });
          card.addEventListener("dragover", (e) => {
            e.preventDefault();
            e.dataTransfer.dropEffect = "move";
            taskList
              .querySelectorAll(".task-card")
              .forEach((c) => c.classList.remove("drag-over"));
            if (card !== dragSrc) card.classList.add("drag-over");
          });
          card.addEventListener("drop", (e) => {
            e.preventDefault();
            if (!dragSrc || dragSrc === card) return;
            const from = parseInt(dragSrc.dataset.idx);
            const to = parseInt(card.dataset.idx);
            const [moved] = tasks.splice(from, 1);
            tasks.splice(to, 0, moved);
            saveTasks();
            render();
          });

          taskList.appendChild(card);
        });

        // Toggle button
        if (tasks.length > VISIBLE_COUNT) {
          toggleBtn.style.display = "flex";
          toggleBtn.classList.toggle("expanded", expanded);
          toggleBtn.innerHTML = expanded
            ? `<span class="arrow" style="transform:rotate(180deg)">&#8964;</span>`
            : `<span class="arrow">&#8964;</span>`;
        } else {
          toggleBtn.style.display = "none";
        }

        renderStats();
      }

      function addTask() {
        const title = taskInput.value.trim();
        if (!title) {
          taskInput.focus();
          return;
        }
        tasks.unshift({ title, date: dateInput.value, done: false });
        saveTasks();
        taskInput.value = "";
        taskInput.focus();
        expanded = false;
        render();
      }

      function escHtml(str) {
        return str.replace(
          /[&<>"']/g,
          (c) =>
            ({
              "&": "&amp;",
              "<": "&lt;",
              ">": "&gt;",
              '"': "&quot;",
              "'": "&#39;",
            })[c],
        );
      }

      addBtn.addEventListener("click", addTask);
      taskInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter") addTask();
      });
      toggleBtn.addEventListener("click", () => {
        expanded = !expanded;
        render();
      });

      render();
      const searchBar = document.querySelector(".search-bar");
      const items = document.querySelectorAll("#cards .card, .quiz-card");

      searchBar.addEventListener("input", function () {
        const value = this.value.toLowerCase();

        items.forEach((card) => {
          const text = card.textContent.toLowerCase();

          card.style.display = text.includes(value) ? "block" : "none";
        });
      });

      
const claimBtn = document.getElementById("claim-btn");
const overlay = document.querySelector(".daily-overlay");
const scoreText = document.querySelector(".score h2");

claimBtn.addEventListener("click", function () {

  overlay.style.display = "none";

  scoreText.textContent = "Score: 30";

  claimBtn.disabled = true;
  claimBtn.textContent = "Claimed";

  localStorage.setItem("dailyClaimed", "true");
  localStorage.setItem("score", "30");
});

window.addEventListener("DOMContentLoaded", function () {
  if (localStorage.getItem("dailyClaimed") === "true") {
    overlay.style.display = "none";
    scoreText.textContent = "Score: " + localStorage.getItem("score");
    claimBtn.disabled = true;
    claimBtn.textContent = "Claimed";
  }
});
