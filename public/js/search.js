$(document).ready(function () {
    // Khai báo đối tượng timeout để dùng cho hàm
    // clearTimeout
    var timeout = null;
    console.log("123");

    // Sự kiện keyup ,jquery
    $(".keyword").keyup(function () {
        // console.log("12332131");
        // Xóa đi những gì ta đã thiết lập ở sự kiện
        // keyup của ký tự trước (nếu có)
        // clearTimeout(timeout);
        // console.log(product);
        // Sau khi xóa thì thiết lập lại timeout
        timeout = setTimeout(function () {
            // Lấy nội dung search
            var data = {
                keyword: $(".keyword").val(),
            };
            console.log(data);

            // var data = $(this).val();
            // console.log(data);

            // Gửi ajax search
            $.ajax({
                type: "get", //loai
                method: "get", //phuong thuc yeu cau
                dataType: "json", //Kiểu dữ liệu 
                data: data, //du lieu gui di
                // url: 'http://localhost/laravelpro/unimart/users/search/searchajax',
                url: "http://localhost/project_datn/search/searchajax", // xác định địa chỉ mà yêu cầu sẽ được gửi đến.
                // url: 'https://github.com/',
                success: function (data) {
                    // $('#result').html(result);
                    // $('#search-data');
                    // console.log(data);
                    // $('#search-data').each(function (product) {
                    //     console.log(data);
                    // });

                    $("ul#search-data").find("li").remove().end();
                    $.each(data.post, function (index, value) {
                        var price = value.price;

                        var format = parseFloat(price, 0)
                            .toFixed(1)
                            .replace(/(\d)(?=(\d{3})+\.)/g, "$1,")
                            .toString();
                        // console.log(format);
                        // console.log(format);

                        console.log(value.product_thumb);
                        var content =
                            '<li class="clearfix">' +
                            '<a class="a-none d-flex pt-2" href="http://localhost/project_datn/detail_post/' +
                            value.id +
                            "/" +
                            '">' +
                            '<div class="thumb-info fl-left">' +
                            '<img width="80px" height="50px" src="http://localhost/project_datn/' +
                            value.thumb_head +
                            '" alt="">' +
                            "</div>" +
                            ' <div class="ml-2 info-product fl-left">' +
                            '<p class="product_name mb-1">' +
                            value.title_head +
                            "</p>" +
                            // '<p class="price">' +
                            // value.author +
                            " </div>" +
                            "  </a>" +
                            "  </li>  ";

                        $("ul#search-data").append(content);
                        // console.log(content);
                    });

                    $("#search-data").css({
                        display: "block",
                        transition:
                            "all 0.5s cubic-bezier(0.25, 0.1, 0.86, 0.25) 0s",
                    });
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                },
            });
        }, 200);
        $(document).on("click", function (event) {
            var target = $(event.target);

            // Kiểm tra xem phần tử được click có phải là input hay không
            if (!target.is(".keyword")) {
                // Nếu không phải là input, thực hiện các hành động bạn muốn ở đây
                $("#search-data").css({
                    display: "none",
                });
            }
        });
    });
});
$(".btn-view-more").click(function () {
    $(this).prev().slideDown().removeClass("view-more");
    $(".btn-hidden").removeClass("hidden");
    $(this).addClass("hidden");
});
$(".btn-hidden").click(function () {
    $(".btn-view-more").prev().addClass("view-more");
    $(".btn-view-more").removeClass("hidden");
    $(this).addClass("hidden");
});
