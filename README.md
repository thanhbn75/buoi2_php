Họ tên: Vũ Minh Thành
MSV: 23810310236
# Lab 2: PHP & MySQL (PDO)

Dự án thực hành kết nối cơ sở dữ liệu và quản lý sinh viên cơ bản.

## Chức năng

- Kết nối Database an toàn bằng *PDO*.
- Thêm sinh viên mới (Sử dụng Prepared Statement).
- Hiển thị danh sách sinh viên dưới dạng bảng HTML.

## Cài đặt

1. Import database buoi2_php từ câu lệnh SQL trong yêu cầu bài tập.
2. Copy thư mục vào htdocs.
4. Truy cập localhost/buoi2_php/add_students.php để thêm sinh viên.
4. Truy cập localhost/buoi2_php/list_students.php để hiển thị danh sách.

Lệnh Database:
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    student_code VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);
