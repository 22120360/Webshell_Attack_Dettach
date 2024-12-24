<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        // Đường dẫn tới thư mục lưu trữ tệp
        $uploadDir = 'uploads/';
        // Tạo tên tệp duy nhất để tránh ghi đè
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);

        // Kiểm tra và tạo thư mục nếu chưa tồn tại
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Di chuyển tệp đã tải lên đến thư mục lưu trữ
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "Tệp đã được tải lên thành công tại: " . $uploadFile . "\n";
        } else {
            echo "Có lỗi xảy ra khi tải tệp lên.\n";
        }
    } else {
        echo "Không có tệp nào được tải lên hoặc có lỗi xảy ra.\n";
    }
}
?>
