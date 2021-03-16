<?php
session_start();
if (!isset($_SESSION["chk_ssid"]) ||
$_SESSION["chk_ssid"] != session_id()
) {
    header("Location: login.php"); 
} else {
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
}
?>

<!DOCTYPE html>
<html lang='ja'>
    <?php include('views/header.inc.php'); ?>
    <body>
    <div class="tittle">
        <h2>My page</h2>
        <p>以下のフォームに食料品を追加し、リストから管理して見てください。<br>
        各項目は必要な場合は修正はもちろん削除することもできます。<p>
    </div>
    <div class="content">
	<?php
	// データベースに接続する
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=list;charset=utf8", "root", "");
	// print_r($_POST);

	// 受け取ったidのレコードの削除
	if (isset($_POST["delete_id"])) {
		$delete_id = $_POST["delete_id"];
		$sql  = "DELETE FROM list WHERE id = :delete_id;";
		$stmt = $pdo->prepare($sql);
		$stmt -> bindValue(":delete_id", $delete_id, PDO::PARAM_INT);
		$stmt -> execute();
	}

	// 受け取ったデータを書き込む
	if (isset($_POST["item"]) && isset($_POST["quantity"]) && isset($_POST["expiration"])) {
		$item   = $_POST["item"];
        $quantity = $_POST["quantity"];
        $expiration = $_POST["expiration"];
		$sql  = "INSERT INTO list (item, quantity, expiration) VALUES (:item, :quantity, :expiration);";
		$stmt = $pdo->prepare($sql);
		$stmt -> bindValue(":item", $item, PDO::PARAM_STR);
		$stmt -> bindValue(":quantity", $quantity, PDO::PARAM_STR);
        $stmt -> bindValue(":expiration", $expiration, PDO::PARAM_STR);
		$stmt -> execute();
	} ?>

    <div class="list">
	<h3>フォーム</h3>
    <div class="list__form">
	<form action="mypage.php" method="post">
		<p><label>項目</label>
		<input type="text" name="item"><p>
		<p><label>量</label>
		<input type="number" name="quantity"></p>
        <p><label>賞味期限</label>
        <input type="date" value="xxx" min="yyy" max="zzz" name="expiration"></p>
		<button type="submit" class="submit">送信</button>
	</form>
    </div>
</div>
    <div class="list">
    <div class="list__tittle">
        <h3>リスト</h3>
    </div>
	<div class="list__content">
        <?php
        // データベースからデータを取得する
        $sql = "SELECT * FROM list ORDER BY id;";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute();
        ?>
        <table>
            <tr>
                <th>No.</th>
                <th>項目</th>
                <th>量</th>
                <th>賞味期限</th>
                <th></th>
            </tr>
            <?php
            // 取得したデータを表示する
            while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["item"] ?></td>
                    <td><?= $row["quantity"] ?></td>
                    <td><?= $row["expiration"] ?></td>
                    <td>
                        <form action="mypage.php" method="post">
                            <input type="hidden" name="delete_id" value=<?= $row["id"] ?>>
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    </div>
        <?php include('views/footer.inc.php'); ?>
    </body>
</html>
