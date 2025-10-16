<?php include 'templates/header.php'; ?>
<h2>Accounts (Demo)</h2>
<table class='table'><thead><tr><th>ID</th><th>Name</th><th>Username</th><th>Balance</th><th>Actions</th></tr></thead><tbody>
<tr><td>1</td><td>Alice Demo</td><td>alice</td><td>12000</td><td><button class="btn btn-ghost1" onclick="location.href='/transfer.php'">Transfer</button> <button class="btn btn-ghost1" onclick="location.href='/transactions.php'">View Tx</button></td></tr>
<tr><td>2</td><td>Bob Demo</td><td>bob</td><td>5400</td><td><button class="btn btn-ghost1" onclick="location.href='/transfer.php'">Transfer</button> <button class="btn btn-ghost1" onclick="location.href='/transactions.php'">View Tx</button></td></tr>
<tr><td>99</td><td>Administrator</td><td>admin</td><td>0</td><td><button class="btn btn-danger" onclick="location.href='/admin.php'">Admin</button></td></tr>
</tbody></table>
<?php include 'templates/footer.php'; ?>