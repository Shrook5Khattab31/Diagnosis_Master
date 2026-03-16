<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Physio Student';

// Example mock data – later replace with DB values
$chapterProgress = 62; // %
$userLevel       = 7;
$userXP          = 4200;
$nextLevelXP     = 5000;
$streakDays      = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Physio Gamified Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dashboard_style.css">
</head>
<body>
<div class="dashboard-wrapper">

  <div class="dashboard-header">
    <div class="dashboard-title">
      <h1>Physiotherapy Gamified Hub</h1>
      <p>12 essential gamification elements applied to your physio learning journey.</p>
    </div>
    <div class="user-pill">
      <div class="user-avatar">
        <?php echo strtoupper(substr($username, 0, 2)); ?>
      </div>
      <div class="user-info">
        <strong><?php echo htmlspecialchars($username); ?></strong>
        <span>Focused track: Physiotherapy</span>
      </div>
      <div class="user-level-chip">
        <span>LVL <?php echo $userLevel; ?></span>
        <span>Clinician</span>
      </div>
    </div>
  </div>

  <div class="grid">

    <!-- 01 LEADERBOARDS -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">📊</span>
          Leaderboards
        </div>
        <span class="pill">Weekly cohort stats</span>
      </div>
      <div class="leaderboard">
        <div class="leader-row">
          <div class="leader-main">
            <span class="dot me"></span>
            <span>You</span>
          </div>
          <span>42 cases · LVL 7</span>
        </div>
        <div class="leader-row">
          <div class="leader-main">
            <span class="dot"></span>
            <span>Student A</span>
          </div>
          <span>48 cases · LVL 8</span>
        </div>
        <div class="leader-row">
          <div class="leader-main">
            <span class="dot others"></span>
            <span>Student B</span>
          </div>
          <span>30 cases · LVL 6</span>
        </div>
      </div>
      <div class="collections" style="margin-top: 12px;">
        <div class="collection-row">
          <div class="collection-main">
            <span>Group case goal</span>
            <span class="mini-label">74 / 100 cases this week</span>
          </div>
          <div class="collection-progress">
            <div class="collection-progress-bar" style="width: 74%;"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- 02 LEVELS -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">📈</span>
          Levels
        </div>
        <span class="pill">Next: Level 8</span>
      </div>
      <div class="progress-outer">
        <?php $xpPercent = min(100, max(0, round(($userXP / $nextLevelXP) * 100))); ?>
        <div class="progress-inner" style="width: <?php echo $xpPercent; ?>%;"></div>
      </div>
      <div class="progress-label">
        <span><?php echo $userXP; ?> / <?php echo $nextLevelXP; ?> XP</span>
        <span class="tag-primary"><?php echo $xpPercent; ?>% to next level</span>
      </div>
      <div class="chips-row">
        <span class="chip">Level titles: Student → Clinician → Specialist</span>
        <span class="chip highlight">Unlock harder cases at higher levels</span>
      </div>
    </div>

    <!-- 03 QUESTS -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">🧩</span>
          Quests
        </div>
        <button class="small-btn primary">New quest</button>
      </div>
      <ul class="list">
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Solve 3 Low Back Pain cases</span>
            <span class="list-sub">2 / 3 completed · Assessment & red flags</span>
          </div>
          <span class="badge-inline">+180 pts</span>
        </li>
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Finish 2 Gait Analysis quizzes</span>
            <span class="list-sub">1 / 2 completed · Gait deviations</span>
          </div>
          <span class="badge-inline">+120 pts</span>
        </li>
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Unlock Neurorehab mini-pathway</span>
            <span class="list-sub">Reach Level 8 to start this quest</span>
          </div>
          <span class="badge-inline">🔒</span>
        </li>
      </ul>
    </div>

    <!-- 04 POINTS -->
    <div class="card">
      <div class="card-header">
        <div>
          <div class="card-title">
            <span class="icon">💯</span>
            Points
          </div>
          <div class="card-subtitle">Points earned in the current module.</div>
        </div>
        <button class="small-btn primary">View history</button>
      </div>
      <div class="progress-outer">
        <div class="progress-inner" style="width: <?php echo $chapterProgress; ?>%;"></div>
      </div>
      <div class="progress-label">
        <span class="tag-primary"><?php echo $chapterProgress; ?>% of target points</span>
        <span>Target: 1,000 pts</span>
      </div>
      <div class="chips-row">
        <span class="chip">+25 pts per quiz</span>
        <span class="chip">+60 pts per patient case</span>
        <span class="chip highlight">+120 pts boss case</span>
      </div>
    </div>

    <!-- 05 BADGES -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">🏅</span>
          Badges
        </div>
        <span class="pill">6 / 18 badges unlocked</span>
      </div>
      <div class="badge-grid">
        <div class="badge-cell earned">
          ROM Master
          <div class="mini-label">>90% in ROM quiz</div>
        </div>
        <div class="badge-cell earned">
          Neuro Detective
          <div class="mini-label">5 neuro lesions solved</div>
        </div>
        <div class="badge-cell earned">
          Pain Pattern Pro
          <div class="mini-label">Visceral vs MSK</div>
        </div>
        <div class="badge-cell">
          Rehab Strategist
          <div class="mini-label">Plan 10 programs</div>
        </div>
        <div class="badge-cell">
          Cardio Guard
          <div class="mini-label">Cardio risk screening</div>
        </div>
        <div class="badge-cell">
          Case Marathoner
          <div class="mini-label">20 cases in 1 week</div>
        </div>
      </div>
      <div class="tiny">Complete quests and cases to unlock more badges.</div>
    </div>

    <!-- 06 MAPS -->
    <div class="card">
      <div class="card-header">
        <div>
          <div class="card-title">
            <span class="icon">🗺️</span>
            Maps
          </div>
          <div class="card-subtitle">Anatomy & chapter map for Lower Limb.</div>
        </div>
        <span class="pill">Module map</span>
      </div>
      <div class="chapter-map">
        <div class="map-node completed">
          Knee
          <div class="mini-label">6 / 6 topics</div>
        </div>
        <div class="map-node current">
          Ankle & Foot
          <div class="mini-label">3 / 5 topics</div>
        </div>
        <div class="map-node">
          Hip
          <div class="mini-label">1 / 4 topics</div>
        </div>
        <div class="map-node locked">
          Lumbar Spine
          <div class="mini-label">Locked</div>
        </div>
        <div class="map-node locked">
          Pelvis / SIJ
          <div class="mini-label">Locked</div>
        </div>
        <div class="map-node locked">
          Neuro Pathways
          <div class="mini-label">Locked</div>
        </div>
      </div>
      <div class="tiny">Finish Ankle & Foot to unlock Lumbar Spine content.</div>
    </div>

    <!-- 07 CERTIFICATES -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">📜</span>
          Certificates
        </div>
        <button class="small-btn primary">My certificates</button>
      </div>
      <ul class="list">
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Knee Rehabilitation Module</span>
            <span class="list-sub">Completed · Eligible for certificate download.</span>
          </div>
          <button class="small-btn primary">Download</button>
        </li>
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Ankle & Foot Module</span>
            <span class="list-sub">In progress · 60% of assessments passed.</span>
          </div>
          <span class="badge-inline">Complete to unlock</span>
        </li>
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Intro to Neurorehab</span>
            <span class="list-sub">Locked · Reach Level 8.</span>
          </div>
          <span class="badge-inline">🔒</span>
        </li>
      </ul>
    </div>

    <!-- 08 VIRTUAL CURRENCIES -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">💰</span>
          Virtual Currencies
        </div>
        <span class="pill">Physio Coins</span>
      </div>
      <div class="progress-label">
        <span class="tag-primary">You have 320 coins</span>
        <span>Earned this week: 90</span>
      </div>
      <div class="chips-row">
        <span class="chip highlight">Spend coins on rare cases</span>
        <span class="chip">Unlock avatar items</span>
        <span class="chip">Unlock new environments</span>
      </div>
      <div class="collections" style="margin-top: 12px;">
        <div class="collection-row">
          <div class="collection-main">
            <span>Advanced Knee Case Pack</span>
            <span class="mini-label">Cost 150 coins · 0 / 4 solved</span>
          </div>
          <span class="badge-inline">Unlocked</span>
        </div>
        <div class="collection-row">
          <div class="collection-main">
            <span>Neuro Ward Environment</span>
            <span class="mini-label">Cost 200 coins · Locked</span>
          </div>
          <span class="badge-inline">🔒</span>
        </div>
      </div>
    </div>

    <!-- 09 DAILY CHECK-IN -->
    <div class="card">
      <div class="card-header">
        <div>
          <div class="card-title">
            <span class="icon">📅</span>
            Daily Check-in
          </div>
          <div class="card-subtitle">Log in and study a little every day.</div>
        </div>
        <span class="pill">
          Current streak: <strong><?php echo $streakDays; ?> days</strong>
        </span>
      </div>
      <div class="heatmap" id="streakHeatmap"></div>
      <div class="heat-labels">
        <span>Last 7 days</span>
        <span class="tag-success">Don’t break the chain</span>
      </div>
      <div class="heat-legend">
        <span><span class="heat-dot"></span> Off</span>
        <span><span class="heat-dot on"></span> Study day</span>
      </div>
    </div>

    <!-- 10 AVATAR -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">🧑‍⚕️</span>
          Avatar
        </div>
        <button class="small-btn primary">Customize</button>
      </div>
      <div class="avatar-preview">
        <div class="avatar-big"></div>
        <div class="avatar-meta">
          <strong><?php echo htmlspecialchars($username); ?></strong>
          <span>Current role: Physio Clinician</span>
          <div class="avatar-tags">
            <span class="avatar-tag">Lab coat: Advanced</span>
            <span class="avatar-tag">Tools: Goniometer · Tape</span>
          </div>
        </div>
      </div>
      <div class="tiny">Unlock new outfits and tools using coins and badges.</div>
    </div>

    <!-- 11 VIRTUAL ENVIRONMENTS -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">🌐</span>
          Virtual Environments
        </div>
        <span class="pill">Clinic scenes</span>
      </div>
      <ul class="list">
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Sports Rehab Lab</span>
            <span class="list-sub">Active · Used in knee and ankle cases.</span>
          </div>
          <span class="badge-inline">Selected</span>
        </li>
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Neuro Ward</span>
            <span class="list-sub">Unlock with certificate: Intro to Neurorehab.</span>
          </div>
          <span class="badge-inline">🔒</span>
        </li>
        <li class="list-item">
          <div class="list-main">
            <span class="list-title">Outpatient Clinic</span>
            <span class="list-sub">Unlock at Level 9.</span>
          </div>
          <span class="badge-inline">🔒</span>
        </li>
      </ul>
    </div>

    <!-- 12 COLLECTIBLES -->
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <span class="icon">🎁</span>
          Collectibles
        </div>
        <button class="small-btn primary">View all</button>
      </div>
      <div class="collections">
        <div class="collection-row">
          <div class="collection-main">
            <span>Rare Knee Case “ACL Triple Match”</span>
            <span class="mini-label">Solved · Grants +5% XP on knee quizzes.</span>
          </div>
          <span class="badge-inline">Owned</span>
        </div>
        <div class="collection-row">
          <div class="collection-main">
            <span>Special Tool: Balance Board</span>
            <span class="mini-label">Use in 3 ankle cases to activate.</span>
          </div>
          <span class="badge-inline">In progress</span>
        </div>
        <div class="collection-row">
          <div class="collection-main">
            <span>Legendary Case: Complex Poly-trauma</span>
            <span class="mini-label">Locked · Needs 10 certificates.</span>
          </div>
          <span class="badge-inline">🔒</span>
        </div>
      </div>
      <div class="tiny">Collect rare cases and tools to show your mastery.</div>
    </div>

  </div>
</div>

<script>
// streak heatmap
(function renderStreak() {
  const container = document.getElementById('streakHeatmap');
  if (!container) return;
  const days = 7;
  const activeDays = 5; // replace with real streak logic
  for (let i = 0; i < days; i++) {
    const cell = document.createElement('div');
    cell.className = 'heat-cell' + (i >= days - activeDays ? ' active' : '');
    container.appendChild(cell);
  }
})();
</script>
</body>
</html>