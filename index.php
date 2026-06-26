<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ - Tin Tức 24H</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">

    <div class="logo">
        TIN TỨC 24H
    </div>

    <div class="search-box">
        <input type="text" id="search" placeholder="Tìm kiếm tin tức..." onkeyup="timKiem()">
    </div>

    <div class="avatar">
        <img src="images/avatar.jpg">
    </div>

</header>

<nav class="menu">
    <a href="#">Trang chủ</a>
    <a href="#">Thời sự</a>
    <a href="#">Công nghệ</a>
    <a href="#">Giải trí</a>
    <a href="#">Thể thao</a>
</nav>

<section class="banner">

    <img src="images/banner.jpg">

</section>

<section class="section">

    <h2>TIN MỚI NHẤT</h2>

    <div class="news-card">

        <img src="images/news1.jpg">

        <div class="news-content">
            <h3>Công nghệ AI phát triển mạnh</h3>

            <p>
                Cập nhật những xu hướng công nghệ mới nhất năm 2026,
                nhiều ứng dụng AI đang được triển khai trong giáo dục,
                y tế và doanh nghiệp.
            </p>

            <span>15 phút trước</span>
        </div>

    </div>

    <div class="news-card">

        <img src="images/news2.jpg">

        <div class="news-content">
            <h3>Kinh tế Việt Nam tăng trưởng</h3>

            <p>
                Nhiều tín hiệu tích cực từ nền kinh tế trong quý mới,
                hoạt động sản xuất và xuất khẩu tiếp tục phục hồi.
            </p>

            <span>1 giờ trước</span>
        </div>

    </div>

    <div class="news-card">

        <img src="images/news3.jpg">

        <div class="news-content">
            <h3>Thể thao cuối tuần</h3>

            <p>
                Những trận đấu hấp dẫn được mong chờ nhất,
                thu hút đông đảo người hâm mộ.
            </p>

            <span>2 giờ trước</span>
        </div>

    </div>

</section>

<section class="section">

    <h2>TIN XEM NHIỀU</h2>

    <div class="news-card">

        <img src="images/hot1.jpg">

        <div class="news-content">
            <h3>Du lịch hè 2026</h3>

            <p>
                Các điểm đến nổi tiếng trong nước thu hút lượng lớn du khách.
            </p>

            <span>12.500 lượt xem</span>
        </div>

    </div>

    <div class="news-card">

        <img src="images/hot2.jpg">

        <div class="news-content">
            <h3>Giá vàng tăng mạnh</h3>

            <p>
                Thị trường vàng ghi nhận nhiều biến động trong tuần qua.
            </p>

            <span>10.800 lượt xem</span>
        </div>

    </div>

    <div class="news-card">

        <img src="images/hot3.jpg">

        <div class="news-content">
            <h3>Xu hướng AI mới</h3>

            <p>
                Nhiều công nghệ AI thế hệ mới đang được nghiên cứu và phát triển.
            </p>

            <span>9.700 lượt xem</span>
        </div>
    </div>
</section>
<script>

function timKiem() {

    let tuKhoa = document.getElementById("search").value.toLowerCase();

    let danhSachTin = document.querySelectorAll(".news-card");

    danhSachTin.forEach(function(tin){
        tin.style.backgroundColor = "white";
    });

    if(tuKhoa=="") return;

    for(let i=0; i<danhSachTin.length; i++){

        let noiDung = danhSachTin[i].innerText.toLowerCase();

        if(noiDung.includes(tuKhoa)){

            danhSachTin[i].scrollIntoView({
                behavior:"smooth",
                block:"center"
            });

            danhSachTin[i].style.backgroundColor = "#fff7b2";

            break;
        }

    }

}

</script>
</body>
</html>
