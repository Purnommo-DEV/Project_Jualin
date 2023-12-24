/*price range*/
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $(document).ready(function () {
        $(".tambahKeKeranjangBtn").click(function (e) {
            e.preventDefault();
            var produk_id = $(this)
                .closest(".produk_data")
                .find(".produk_id")
                .val();
            var nama_umkm = $(this)
                .closest(".produk_data")
                .find(".nama_umkm")
                .val();
            var produk_qty = $(this)
                .closest(".produk_data")
                .find(".qty-input")
                .val();

            $.ajax({
                method: "POST",
                url: "/umum_save_produk_ke_keranjang",
                data: {
                    produk_id: produk_id,
                    nama_umkm: nama_umkm,
                    produk_qty: produk_qty
                },
                success: function (response) {
                    alert(response.status);
                }
            });
        });
    });

    $("hapusKeranjangItem").click(function (e) {
        e.preventDefault();
        var produk_id = $(this)
            .closest(".produk_data")
            .find(".produk_id")
            .val();
        $.ajax({
            method: "POST",
            url: "/umum_hapus_produk_dalam_keranjang",
            data: {
                "produk_id": produk_id,
            },
            success: function (response) {
                swal("", response.status, "success");
            }
        });
    });

    $(document).ready(function () {
        $(".increment-btn").click(function (e) {
            e.preventDefault();
            var inc_value = $(this)
                .closest(".produk_data")
                .find(".qty-input")
                .val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $(this)
                    .closest(".produk_data")
                    .find(".qty-input")
                    .val(value);
            }
        });
        $(".decrement-btn").click(function (e) {
            e.preventDefault();
            var dec_value = $(this)
                .closest(".produk_data")
                .find(".qty-input")
                .val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value--;
                $(this)
                    .closest(".produk_data")
                    .find(".qty-input")
                    .val(value);
            }
        });
        $(".isiKuantitas").click(function (e) {
            e.preventDefault();
            var cartid = $(this).data("cartid");
            $.ajax({
                data: {
                    cartid: cartid,
                    qty: new_qty,
                    totals: new_total
                },
                url: "/umum_update_kuantitas_produk",
                type: "post",
                success: function (resp) {
                    if (resp.status == false) {
                        alert("Melebihi Stok Produk");
                    }
                    window.location.reload();
                },
                error: function () {
                    alert("Error");
                }
            });
        });
    });



    $(document).on("click", ".btnItemUpdate", function () {
        if ($(this).hasClass("qtyMinus")) {
            var quantity = $(this)
                .next()
                .val();
            var total = $(this)
                .next()
                .next()
                .next()
                .val();
            // alert(quantity);
            if (quantity <= 1) {
                alert("Kurang dari 1");
            } else {
                new_qty = parseInt(quantity) - 1;
                new_total = parseInt(total) * new_qty;
            }
        }
        if ($(this).hasClass("qtyPlus")) {
            var quantity = $(this)
                .prev()
                .val();
            var total = $(this)
                .next()
                .val();
            new_qty = parseInt(quantity) + 1;
            new_total = parseInt(total) * new_qty;
        }
        var cartid = $(this).data("cartid");
        $.ajax({
            data: {
                cartid: cartid,
                qty: new_qty,
                totals: new_total
            },
            url: "/umum_update_kuantitas_produk",
            type: "post",
            success: function (resp) {
                if (resp.status == false) {
                    alert("Melebihi Stok Produk");
                } else {
                    window.location.reload();
                }
            },
            error: function () {
                alert("Error");
            }
        });
    });

    $(document).on("click", ".btnItemDelete", function () {
        var cartid = $(this).data("cartid");
        $.ajax({
            data: {
                cartid: cartid
            },
            url: "/umum_hapus_produk_dalam_keranjang",
            type: "post",
            success: function (resp) {
                window.location.reload();
                swal("", response.status, "success");
            },
            error: function () {
                alert("Error");
            }
        });
    });
});

$("#sl2").slider();

var RGBChange = function () {
    $("#RGB").css(
        "background",
        "rgb(" + r.getValue() + "," + g.getValue() + "," + b.getValue() + ")"
    );
};
/*scroll to top*/

$(document).ready(function () {
    $(function () {
        $.scrollUp({
            scrollName: "scrollUp", // Element ID
            scrollDistance: 300, // Distance from top/bottom before showing element (px)
            scrollFrom: "top", // 'top' or 'bottom'
            scrollSpeed: 300, // Speed back to top (ms)
            easingType: "linear", // Scroll to top easing (see http://easings.net/)
            animation: "fade", // Fade, slide, none
            animationSpeed: 200, // Animation in speed (ms)
            scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
            //scrollTarget: false, // Set a custom target element for scrolling to the top
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
            scrollTitle: false, // Set a custom <a> title if required.
            scrollImg: false, // Set true to use image
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647 // Z-Index for the overlay
        });
    });
});
