<link rel="stylesheet" href="../view/css/ad_seach.css">

<?php

if (isset($_POST['timkiem'])) {
    $name = $_POST['filter'];
}

$sql = sanpham_seach($name);

?>
<h2>Từ khóa tìm kiếm: <?php echo htmlspecialchars($_POST['filter']); ?></h2>
<form action="" id="tim" method="POST">
    <div class="tim">
        <input type="text" name="filter" placeholder="Tìm Kiếm sản phẩm">
        <input id="timkiem" type="submit" name="timkiem" value="Tìm kiếm">
        <br>
    </div>
</form>

<ul>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["filter"];
        if ($name != "") {
            // Truy vấn tìm kiếm sản phẩm
            $query = sanpham_seach($name);

            if($query != null){
                echo "<h3 class='ketqua'>Kết quả tìm kiếm: " . htmlspecialchars($name) . "</h3>";

                foreach($query as $row) {
                    echo "<table>";

                    // Hiển thị các thông tin về sản phẩm bao gồm màu sắc, size, số lượng
                    echo '
                        <tr>
                            <td>' . $row['id'] . '</td>
                            <td><img src="../view/images/' . $row['hinh'] . '" alt=""></td>
                            <td colspan="3" class="tensp">' . $row['tensp'] . '</td>
                            <td>' . number_format($row['gia'], 0, ',', '.') . 'đ</td>
                            <td>' . $row['iddanhmuc'] . '</td>
                            <td>' . $row['size_name'] . '</td>
                            <td>' . $row['iddanhmuc'] . '</td>
                            <td>' . $row['so_luong'] . '</td>
                            <td class="ad"><a href="../model/suasp.php?page_layout=sua&id=' . $row['id'] . '"> <i class="bx bx-edit"></i> </a></td>
                            <td class="ad"><a href="../model/xoasp.php?page_layout=xoa&id=' . $row['id'] . '"> <i class="bx bx-message-square-minus"></i> </a></td>
                        </tr>
                    ';
                    echo "</table>";
                }
            } else {
                echo "<h3 style='margin-left:30px;'>Không tìm thấy kết quả: " . htmlspecialchars($name) . " </h3>";
            }
        }
    }
    ?>
</ul>

</div>
