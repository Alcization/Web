<?php include 'templates/header.php'; ?>
<h1 style="margin-top:6px">Welcome to MOCK BANK — DEMO</h1>
<p style="color:#5b6b7a;max-width:820px">No login required — all pages are prebuilt for UI testing. Use the buttons below to jump to the mock endpoints.</p>
<div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:18px">
  <button class="btn btn-primary" onclick="location.href='/dashboard.php'">Open Dashboard</button>
  <button class="btn btn-ghost" onclick="location.href='/accounts.php'">View Accounts</button>
  <button class="btn btn-ghost" onclick="location.href='/transfer.php'">Transfer (Demo)</button>
  <button class="btn btn-ghost" onclick="location.href='/transactions.php'">Transactions</button>
  <button class="btn btn-ghost" onclick="location.href='/about.php'">About</button>
  <button class="btn btn-ghost" onclick="location.href='/contact.php'">Contact</button>
  <button class="btn btn-danger" onclick="location.href='/admin.php'">Admin (Demo)</button>
</div>
<?php include 'templates/footer.php'; ?>