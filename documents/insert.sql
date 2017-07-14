DELETE FROM sale_details WHERE id > 0;
DELETE FROM comments WHERE id > 0;
DELETE FROM sales WHERE id > 0;
DELETE FROM order_details WHERE id >0;
DELETE FROM orders WHERE id > 0;
DELETE FROM users WHERE id >0;
DELETE FROM products WHERE id >0;
DELETE FROM brands WHERE id >0;

INSERT INTO brands VALUES(1,"AMERICA01D","DELL","Dòng sản phẩm công nghệ Mỹ, gia công tại Trung Quốc");
INSERT INTO brands VALUES(2,"AMERICA01H","HP", "Dòng sản phẩm công nghệ Mỹ, gia công tại Trung Quốc");
INSERT INTO brands VALUES(3, "JAPAN01T", "TOSHIBA", "Dòng sản phẩm công nghệ Nhật Bản, gia công tại Trung Quốc");
INSERT INTO brands VALUES(4, "Tai01A", "ASUS", "Dòng sản phẩm của Đài Loan, gia công tại Trung Quốc");
INSERT INTO brands VALUES(5, "AMERICA01AP", "APPLE", "Dòng sản phẩm công nghệ Mỹ, gia công tại Trung Quốc, Ấn Độ");
INSERT INTO brands VALUES(6, "AMERICA01AC", "ACER", "Dòng sản phẩm công nghệ Mỹ, gia công tại Trung Quốc, Ấn Độ");
INSERT INTO brands VALUES(7, "AMERICA01L", "LENOVO", "Dòng sản phẩm công nghệ Mỹ, gia công tại Trung Quốc, Ấn Độ");

INSERT INTO users VALUES(1, "Đào", "1", 1, "nguyenthidao.hus@gmail.com", "Nghệ An", "Diễn Châu",0, "01687869642", "10/09/1994", 1);
INSERT INTO users VALUES(2, "Lương", "1", 1, "macducluong@gmail.com", "Nam Định", "Xuân Thuỷ",0, "01687859786", "20/07/1989", 1);

INSERT INTO products VALUES(1,"Laptop Asus E402SA N3060","","black",99,20,"Dòng máy ASUS", "4GB","Phím rời nổi","13 inch", "218GB","Có hỗ trợ",4);
INSERT INTO products VALUES(2,"Laptop HP 14 am065TU N3060","","black",99,20,"Dòng máy HP", "4GB","Phím rời nổi","13 inch", "218GB","Có hỗ trợ",1);
INSERT INTO products VALUES(3,"Laptop Acer Aspire ES1 432 C5J2 N3350","","black",99,20,"Dòng máy ACER", "4GB","Phím rời nổi","13 inch", "500GB","Có hỗ trợ",6);
INSERT INTO products VALUES(4,"Laptop Lenovo Yoga 300 11IBR N3710","","black",99,20,"Dòng máy ACER", "4GB","Phím rời nổi","13 inch", "500GB","Có hỗ trợ",7 );
INSERT INTO products VALUES(5,"Laptop Lenovo IdeaPad 110 15ISK i3 6006U","","black",99,20,"Dòng máy ACER", "4GB","Phím rời nổi","13 inch", "1TB","Có hỗ trợ",7);

INSERT INTO comments VALUES(1,"Máy này có chơi dota mượt không?",1,1);
INSERT INTO comments VALUES(2,"Máy này có hỗ trợ wifi không?",1,2);
INSERT INTO comments VALUES(3,"Máy này có thể nâng cấp ram không?", 2, 3);
INSERT INTO comments VALUES(4,"Máy này có bảo hành không thớt?", 2, 2);
INSERT INTO comments VALUES(5,"Máy này có vẻ ngon đấy. Phải kiếm tiền sắm em mới được", 1,4);

INSERT INTO sales VALUES(1,"Cùng sinh viên đến trường","Tiếp sức cho sinh viên đến trường. Vì một tương lai tươi sáng", "2017-06-15", "2017-07-15", 20);
INSERT INTO sales VALUES(2,"Tưng Bừng Đón Tết", "Cùng vui tết với gia đình Việt. Cho một cái tết tròn đầy","2017-12-15", "2018-01-10", 40);
INSERT INTO sales VALUES(3,"Tưng Bừng Đón Sinh Nhật", "Tri ân khách hàng. Đón sinh nhật cùng chúng tôi nhé.","2017-09-15", "2017-09-17", 30);
INSERT INTO sales VALUES(4,"Mừng Giáng Sinh","Chúc mừng giáng sinh. Mua ngay nhận quà khủng","2017-11-31", "2018-12-24", 30);

INSERT INTO sale_details VALUES(1, 1,1,1,1);
INSERT INTO sale_details VALUES(2, 1,1,2,1);
INSERT INTO sale_details VALUES(3, 1,1,3,2);


INSERT INTO orders VALUES(1,"2011-06-15", "2011-06-18","2011-06-18","đã shiped",1);
INSERT INTO orders VALUES(2,"2012-06-15", "2012-06-18","2012-06-18","đã shiped",1);
INSERT INTO orders VALUES(3,"2013-06-15", "2013-06-18","2013-06-18","đã shiped",1);
INSERT INTO orders VALUES(4,"2014-06-15", "2014-06-18","2014-06-18","đã shiped",1);
INSERT INTO orders VALUES(5,"2015-06-15", "2015-06-18","2015-06-18","đã shiped",1);

INSERT INTO order_details VALUES(1,2,20,1,1);
INSERT INTO order_details VALUES(2,2,30,1,2);
INSERT INTO order_details VALUES(3,2,20,1,3);

