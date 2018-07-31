@extends('frontend.layouts.master')
@section('content')
    <div class="heading">
        <div class="container">
            <h1 class="suggest-title text-center">Danh sách các mẫu CV dành cho bạn</h1>
            <p class="text-center">Các mẫu CV đuợc thiết kế theo chuẩn phù hợp với từng nhu cầu</p>
        </div>
    </div>

    <div id="template-container">
        <div class="container">
            <div id="template-list">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                        <div class="cv-img">
                            <a href="/choose-cv/create-cv1">
                                <img src="https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-pro_5.png"
                                     class="img-responsive">
                            </a>
                            <div class="cv-overlay">
                                <a href="javascript:showLoginPopup('', 'Đăng nhập hoặc Đăng ký để sử dụng mẫu CV!')">
                                    <span>Dùng mẫu này</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="cv-title">Mẫu CV 1</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                        <div class="cv-img">
                            <a href="/choose-cv/create-cv2">
                                <img src="https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-default.png"
                                     class="img-responsive">
                            </a>
                            <div class="cv-overlay">
                                <a href="javascript:showLoginPopup('', 'Đăng nhập hoặc Đăng ký để sử dụng mẫu CV!')">
                                    <span>Dùng mẫu này</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="cv-title">Mẫu CV 2</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                        <div class="cv-img">
                            <a href="/choose-cv/create-cv3">
                                <img src="https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-senior_2.png"
                                     class="img-responsive">
                            </a>
                            <div class="cv-overlay">
                                <a href="javascript:showLoginPopup('', 'Đăng nhập hoặc Đăng ký để sử dụng mẫu CV!')">
                                    <span>Dùng mẫu này</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="cv-title">Mẫu CV 3</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                        <div class="cv-img">
                            <a href="/choose-cv/create-cv4">
                                <img src="https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-modern_4.png"
                                     class="img-responsive">
                            </a>
                            <div class="cv-overlay">
                                <a href="javascript:showLoginPopup('', 'Đăng nhập hoặc Đăng ký để sử dụng mẫu CV!')">
                                    <span>Dùng mẫu này</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="cv-title">Mẫu CV 4</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                        <div class="cv-img">
                            <a href="/choose-cv/create-cv5">
                                <img src="https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-impressive_pro.png"
                                     class="img-responsive">
                            </a>
                            <div class="cv-overlay">
                                <a href="javascript:showLoginPopup('', 'Đăng nhập hoặc Đăng ký để sử dụng mẫu CV!')">
                                    <span>Dùng mẫu này</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="cv-title">Mẫu CV 5</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 template_cv">
                        <div class="cv-img">
                            <a href="/choose-cv/create-cv6">
                                <img src="https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-premium.png"
                                     class="img-responsive">
                            </a>
                            <div class="cv-overlay">
                                <a href="javascript:showLoginPopup('', 'Đăng nhập hoặc Đăng ký để sử dụng mẫu CV!')">
                                    <span>Dùng mẫu này</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="cv-title">Mẫu CV 6
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="modal-upgrade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p>Bạn cần có Tài Khoản Cao Cấp của TopCV để sử dụng mẫu CV này!</p>
                    <p>Đăng nhập hoặc Đăng ký tài khoản Miễn Phí <a href="javascript:$('#modal-upgrade').modal('hide');showLoginPopup()" class="text-highlight">tại đây</a>.</p>
                    <a href="https://www.topcv.vn/tai-khoan/nang-cap"><img src="https://www.topcv.vn/images/banner/premium-3.png" alt="" class="img-responsive"></a>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" id='toggle-cv-all' href="javascript:void(0)" data-dismiss="modal">Chọn mẫu khác</a>
                    <a target="_blank" href="https://www.topcv.vn/tai-khoan/nang-cap" class="btn btn-warning">Nâng Cấp Tài Khoản</a>
                </div>
            </div>
        </div>
    </div>
     <div class="modal" tabindex="-1" role="dialog" id="modal-limit-cv-free">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p style="font-weight: bold; color: #EF4949;">Bạn đang sử dụng Tài Khoản Miễn Phí, chỉ có thể tạo tối đa 2 CV.</p>
                    <p style="font-style: italic; font-size: 0.95em;">Vui lòng xóa CV không sử dụng, sửa lại CV cũ hoặc nâng cấp Tài Khoản Cao Cấp!</p>
                    <a target="_blank" href="https://www.topcv.vn/tai-khoan/nang-cap"><img src="https://www.topcv.vn/images/banner/premium-3.png" alt="" class="img-responsive"></a>
                </div>
                    <div class="modal-footer">
                        <a href="https://www.topcv.vn/quan-ly-cv" type="button" class="btn btn-default">Quản lý CV</a>
                        <a target="_blank" href="https://www.topcv.vn/tai-khoan/nang-cap" class="btn btn-topcv-primary">Nâng Cấp Tài Khoản</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="modal-limit-cv-premium">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p style="font-weight: bold; color: #EF4949;">Hiện tại TopCV chỉ hỗ trợ tạo tối đa <strong>6</strong> CV.</p>
                    <p style="font-style: italic;">Vui lòng xóa CV không sử dụng hoặc sửa lại CV cũ</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-topcv-primary" data-dismiss="modal">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="modal-buy-template">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form-buy-template">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Thanh toán bằng tin nhắn SMS</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" id="modal-sms-errors" style="display: none">
                            <ul></ul>
                        </div>
                        <input type="hidden" name="template" value="">
                        <div class="form-group">Bạn sẽ được sử dụng mẫu <span style="font-weight: bold" id="buy-template-name"></span> trong 1 tháng.
                        </div>
                        <div class="form-group">
                            <label>Số tiền thanh toán: </label>
                            <span><span id="template-price"></span> VNĐ</span>
                        </div>
                        <div class="row" style="margin-bottom: 10px">
                        <div class="col-xs-6">
                        <div class="form-group">
                        <label>Mã giảm giá (nếu có)</label>
                        <div class="form-inline">
                        <input type="text" class="form-control" name="coupon" style="width: 66%;">
                        <a href="javascript:checkCoupon()" class="btn btn-primary" id="btn-apply-coupon" style="padding: 9px 15px; border-radius: 3px" disabled>Áp dụng</a>
                        </div>
                        </div>
                        <span class="text-danger" id="coupon-error" style="display: none"></span>
                        <span id="code-desc-wraper" style="display: none"><a href="javascript:removeCoupon()"><strong class="text-danger"><i class="fa fa-times"></i></strong></a> <strong><span class="text-primary" id="code-desc"></span></strong></span>
                        </div>
                        <div class="col-xs-6">
                        <table style="width: 100%;" class="table-final-price">
                        <tr>
                        <td>Tổng tiền</td>
                        <td style="text-align: right"><strong><span id="origin-price"></span></strong></td>
                         </tr>
                        <tr>
                        <td>Số tiền được giảm trừ</td>
                        <td style="text-align: right"><strong><span class="text-primary" id="discount"></span></strong></td>
                        </tr>
                        <tr>
                        <td><strong>Số tiền cần thanh toán</strong></td>
                        <td style="text-align: right; font-size: 1.1em"><strong><span class="text-danger" id="pay-price"></span></strong></td>
                        </tr>
                        </table>
                        </div>
                        </div>
                        <div id="phone-input">
                        <div class="form-group">
                        <label>Điền số điện thoại thanh toán:</label>
                        <input type="text" class="form-control" placeholder="Số điện thoại thanh toán" name="phone" required>
                        </div>
                        <p class="text-danger"><strong>Hiện tại chỉ hỗ trợ Viettel và Mobilefone.</strong></p>
                        </div>
                        <div id="active-buy-template" style="display: none">
                        <p><strong>Click "Sử dụng ngay" để sử dụng mẫu CV cao cấp đã chọn.</strong></p>
                        <a href="" class="btn btn-primary" id="btn-active-template" data-code="">Sử dụng ngay</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-topcv-primary">Nhận mã</button>
                    </div>
                </form>
                <form id="form-buy-template-otp" method="POST" style="display: none">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Thanh toán bằng tin nhắn SMS</h4>
                    </div>
                    <div class="modal-body">
                        <p>Điền mã OTP:</p>
                        <p>
                            <input type="hidden" name="code" value="">
                            <input type="text" class="form-control" placeholder="OTP" name="otp">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-topcv-primary">Thanh toán</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <script>
    var templatePrice = 20000;
    $(function () {
        $('#template-price').text(Number(templatePrice.toFixed(1)).toLocaleString());
        $('#origin-price').text(Number(templatePrice.toFixed(1)).toLocaleString());
        setCost(templatePrice, 0, true);

        $(document).on('click', '.require-premium', function (event) {
            event.preventDefault();
            $('#modal-upgrade').modal();
            var template = $(this).data('template');
            var title = $(this).data('title');
            $('#modal-upgrade').find('#btn-buy-template').data('template', template);
            $('#modal-upgrade').find('#btn-buy-template').data('title', title);
        });

        $(document).on('click', '.limit-cv-free', function (event) {
            event.preventDefault();
            $('#modal-limit-cv-free').modal();
        });

        $(document).on('click', '.limit-cv-premium', function (event) {
            event.preventDefault();
            $('#modal-limit-cv-premium').modal();
        });

        $('#btn-buy-template').click(function (event) {
            event.preventDefault();
            $('#modal-upgrade').modal('hide');
            $('#modal-buy-template').modal('show');

            var template = $(this).data('template');
            var title = $(this).data('title');
            $('#buy-template-name').text(title);

            $('#form-buy-template').find('input[name=template]').val(template);
        });

        $('#form-buy-template').submit(function (event) {
            event.preventDefault();

            var phone = $('#form-buy-template').find('input[name=phone]').val();
            var template = $('#form-buy-template').find('input[name=template]').val();
            var service = "6";
            var coupon = $('input[name=coupon]').val();
            $.ajax({
                url: "https://www.topcv.vn/tai-khoan/buy-template",
                method: 'POST',
                data: {
                    phone: phone,
                    template: template,
                    service: service,
                    coupon: coupon
                },
                dataType: "json",
                beforeSend: function () {
                    $('#form-buy-template').find('[type=submit]').prop('disabled', true);
                    $('#modal-sms-errors').hide();
                },
                success: function (response) {
                    if (response.status == 'success') {
                        if (response.url == '') {
                            $('#form-buy-template').hide();
                            $('#form-buy-template-otp').show();
                            $('#form-buy-template-otp').find('[name=code]').val(response.code)
                        } else {
                            window.location.href = response.url;
                        }
                    } else {
                        $('#modal-sms-errors ul').html('');
                        $('#modal-sms-errors ul').append('<li>' + response.error + '</li>');
                        $('#modal-sms-errors').show();
                    }
                },
                error: function (jqXHR, textStatus) {
                },
                complete: function () {
                    $('#form-buy-template').find('[type=submit]').prop('disabled', false);
                },
            });
        });

        $('#form-buy-template-otp').submit(function (event) {
            event.preventDefault();

            var code = $('#form-buy-template-otp').find('input[name=code]').val();
            var otp = $('#form-buy-template-otp').find('input[name=otp]').val();

            $.ajax({
                url: "https://www.topcv.vn/tai-khoan/buy-template/confirm",
                method: 'POST',
                data: {
                    code: code,
                    otp: otp,
                },
                dataType: "json",
                beforeSend: function () {
                    $('#form-buy-template-otp').find('[type=submit]').prop('disabled', true);
                },
                success: function (response) {
                    if (response.status == 'success') {
                        window.location.href = response.url;
                    } else {
                        // $('#modal-buy-template').modal('hide');
                        alert(response.error);
                    }
                },
                error: function (jqXHR, textStatus) {
                    $('#modal-buy-template').modal('hide');
                    alert("Đã có lỗi xảy ra, vui lòng thử lại sau");
                },
                complete: function () {
                    $('#form-buy-template-otp').find('[type=submit]').prop('disabled', false);
                },
            });
        });

        $('#modal-buy-template').on('hidden.bs.modal', function () {
            removeCoupon();
        });

        $('input[name=coupon]').on('input', function() {
            if ($(this).val().length != 0) {
                $('#btn-apply-coupon').attr('disabled', false);
            } else {
                removeCoupon();
            }
        });

        $('#btn-apply-coupon').click(function(event) {
            // hideUpgradeAccount();
            $('#code-desc-wraper').hide();
            $('#coupon-error').hide();
            event.preventDefault();
            var service = parseInt('6');
            var coupon = $('input[name=coupon]').val();
            var price = $('#origin-price').text();
            price = price.replace(',','');

            var data = {
                'code': coupon,
                'price': price,
                'service': service
            };

            checkCoupon(data);
        });

        $('#btn-active-template').click(function(event) {
            event.preventDefault();
            var code     = $(this).attr('data-code');
            var template = $('#form-buy-template').find('input[name=template]').val();

            var data = {
                code: code,
                template: template,
            }

            $.ajax({
                url: "https://www.topcv.vn/tai-khoan/active-tempate",
                type: 'POST',
                dataType: 'json',
                data: data,
                beforeSend: function () {
                    $('#btn-active-template').attr('disabled', true);
                }
            })
            .done(function(response) {
                if (response.status == 'success') {
                    window.location.href = response.url;
                } else {
                    // $('#modal-buy-template').modal('hide');
                    alert(response.error);
                }
            })
            .fail(function(response) {
                console.log(response);
            })
            .complete(function () {
                $('#btn-active-template').attr('disabled', false);
            })
        });
    });
    function checkCoupon(data) {
        $.ajax({
            url: 'https://www.topcv.vn/coupon/verify',
            type: 'POST',
            dataType: 'json',
            data: data,
            beforeSend: function () {
                $('#btn-apply-coupon').attr('disabled', true);
            },
        })
        .done(function(response) {
            if (response.status == 'success') {
                var re_pay_price = response.data.pay_price;
                var re_discount = response.data.discount;
                setCost(re_pay_price, re_discount, true);
                if (re_pay_price == 0) {
                    // alert('GIam 100%');
                    showUseTemplate(response.data.code);
                }
                $('#coupon-error').hide()
                $('#code-desc').text(response.data.code_desc);
                $('#code-desc-wraper').show();
            } else if (response.status == 'fail') {
                $('#coupon-error').show().text(response.error);
                setCost(templatePrice, 0);
            }
        })
        .fail(function() {
            console.log("error");
        })
        .complete(function(){
            $('#btn-apply-coupon').attr('disabled', false);
        })
    }
    function setCost(payPrice, discount, needFormat = false) {
        if (needFormat == true) {
            payPrice = Number(payPrice.toFixed(1)).toLocaleString();
            discount = Number(discount.toFixed(1)).toLocaleString();
        }
        $('#pay-price').text(payPrice);
        $('#discount').text(discount);
        $('#card-value-notice strong').text(payPrice);
    }
    function removeCoupon() {
        $('#coupon-error').hide();
        $('input[name=coupon]').val('');
        $('#code-desc-wraper').hide();
        $('#btn-apply-coupon').attr('disabled', true);
        $('#origin-price').text($('input[name=product_code]:checked').data('value'));
        setCost(templatePrice, 0);
        hideUseTemplate();
    }
    function showUseTemplate(code) {
        $('#phone-input').hide();
        $('#active-buy-template').show();
        $('#btn-active-template').attr('data-code', code);
    }
    function hideUseTemplate(code) {
        $('#phone-input').show();
        $('#active-buy-template').hide();
        $('#btn-active-template').attr('data-code', '');
    }
    </script>
     <div id="footer-fanpage-topcv" class="hidden-xs text-white">
    <a href="#" class="btn-close"><span class="fa fa-times"></span></a>
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
    <p class="intro-headline" style="padding-bottom: 0; margin-bottom: 0;">Ưu đãi khi nâng cấp tài khoản VIP</p>
    <ul class="intro-items">
    <li>Sử dụng tất cả các mẫu đặc biệt cao cấp.</li>
    <li>Không giới hạn và chờ đợi khi tải CV.</li>
    <li>Nhận cơ hội việc làm trực tiếp từ các Nhà tuyển dụng uy tín.</li>
    </ul>
    </div>
    <div class="col-sm-6 text-center">
    <div class="not-share-show">
    <p class="intro-headline text-gold" style="text-align: center;">Dùng tất cả các mẫu CV cao cấp với tài khoản VIP</p>
    <p>
     <a href="https://www.topcv.vn/tai-khoan/nang-cap?utm_source=btn-upgrade-vip&amp;utm_medium=vip-upgrade-intro-mau-cv&amp;utm-campaign=package-vip" target="_blank" id="btn-share-get-coupon" class="btn btn-topcv-primary">Nâng cấp ngay</a>
    </p>
    <p class="text-gray">Để có thể sử dụng những dịch vụ cao cấp nhất từ TopCV<br>
    Cũng như hỗ trợ đội ngũ phát triển &amp; duy trì dịch vụ!</p>
    </div>
    </div>
    </div>
    </div>
    </div>

<script>
        $(document).ready(function () {
            $('#footer-fanpage-topcv .btn-close').click(function (e) {
                e.preventDefault();
                $('#footer-fanpage-topcv').addClass('hide');
            });
            $(window).scroll(function () {
                if ($('#footer-fanpage-topcv').hasClass('hide')) return true;
                var position = $(this).scrollTop();
                if (position > 400) {
                    $('#footer-fanpage-topcv').slideDown(300);
                } else {
                    $('#footer-fanpage-topcv').slideUp(300);
                }
            });
        });
    </script>
@endsection

@section('after-script-footer')

    <div class="modal fade" id="sign-in-popup" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <a class="btn-close text-gray" data-dismiss="modal">
                        <span class="fa fa-times"></span>
                    </a>
                    <div class="">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#sign-in" aria-controls="sign-in" role="tab" data-toggle="tab">Đăng nhập</a>
                            </li>
                            <li role="presentation">
                                <a href="#sign-up" aria-controls="sign-up" role="tab" data-toggle="tab">Đăng ký</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="text-note text-center text-dark-gray" id="sign-in-popup-note"></div>
                            <div role="tabpanel" class="tab-pane active" id="sign-in">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <p class="text-dark-gray text-center">Đăng nhập bằng email</p>
                                        <div class="alert alert-danger" id="alert-log-in-error" style="display: none">
                                            <span id="alert-log-in-message"></span>
                                        </div>
                                        <form action="" id="form-login-ajax" autocomplete="off">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                <input type="email" class="form-control" name="email" autocomplete="off"
                                                       placeholder="Email" value="">
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                <input type="password" class="form-control" name="password"
                                                       autocomplete="off" placeholder="Mật khẩu" value="">
                                            </div>
                                            <div class="text-center btn-login-wraper">
                                                <button type="submit" class="btn btn-topcv-primary" id="btn-login-ajax">Đăng
                                                    nhập
                                                </button>
                                            </div>
                                            <p class="text-center"
                                               style="font-size: 0.9em; margin-top: 5px; margin-bottom: 0;"><a
                                                        target="_blank" href="https://www.topcv.vn/forgot-password">Quên mật
                                                    khẩu?</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="sign-up">
                                <div class="alert alert-danger" id="alert-sign-up-error" style="display: none">
                                    <span id="alert-sign-up-message"></span>
                                </div>
                                <div class="row">
                                    <form action="" id="form-signup-ajax" autocomplete="off">
                                        <div class="col-md-6 col-xs-12 text-center">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="fullname" autocomplete="off"
                                                       placeholder="Họ và tên" tabindex="1" value="">
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                <input type="password" class="form-control" name="password"
                                                       autocomplete="off" placeholder="Mật khẩu" tabindex="3" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 text-center">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                <input type="email" class="form-control" name="email" placeholder="Email"
                                                       tabindex="2">
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                       placeholder="Nhập lại mật khẩu" tabindex="4">
                                            </div>
                                        </div>
                                        <p class="col-xs-12 agree-term text-center">
                                            <input type="checkbox" name="agree_term" checked>
                                            <span class="text-gray">Tôi đồng ý với <a target="_blank"
                                                                                      href="https://www.topcv.vn/terms-of-service"
                                                                                      class="text-highlight">Điều khoản dịch vụ</a> và <a
                                                        target="_blank" href="https://www.topcv.vn/privacy-policy"
                                                        class="text-highlight">Chính sách bảo mật</a> của S4C Club</span>
                                        </p>
                                        <div class="col-xs-12 text-center btn-login-wraper">
                                            <button type="submit" id="btn-signup-ajax" class="btn btn-topcv-primary">Đăng
                                                ký
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            $('#form-login-ajax').submit(function (event) {
                event.preventDefault();
                $('#btn-login-ajax').text("Đang đăng nhập...").attr('disabled', 'disabled');
                ajaxLogin();
            });

            $('#form-signup-ajax').submit(function (event) {
                event.preventDefault();
                $('#btn-signup-ajax').text("Đang xử lý...").attr('disabled', 'disabled');
                ajaxSignup();
            });

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('#sign-in-popup .alert').hide();
            })
        });
        var callbackRedirectUrl = null;
        var isCallbackDownload = false;

        function showLoginPopup(redirect_url, note, is_download, showSignUp) {
            if (note) {
                $('#sign-in-popup-note').html(note);
            } else {
                $('#sign-in-popup-note').html('');
            }
            $('#sign-in-popup').modal('show');
            if (showSignUp) {
                $('#sign-in-popup a[href="#sign-up"]').tab('show');
            } else {
                $('#sign-in-popup a[href="#sign-in"]').tab('show');
            }
            if (!redirect_url) {
                redirect_url = null;
            }
            callbackRedirectUrl = redirect_url;
            if (!is_download) {
                isCallbackDownload = false;
            }
            isCallbackDownload = is_download;
        }

        function ajaxLogin() {
            var data = $('#form-login-ajax').serialize();
            $.post('https://www.topcv.vn/login-ajax', data, function (response) {
                if (response.status == 'success') {
                    if (callbackRedirectUrl) {
                        if (isCallbackDownload) {
                            window.open(callbackRedirectUrl);
                            document.location.reload();
                        } else {
                            document.location.href = callbackRedirectUrl;
                        }
                    } else {
                        document.location.reload();
                    }
                } else {
                    showLoginAjaxError(response.message);
                    $('#btn-login-ajax').text("Đăng nhập").attr('disabled', false);
                }
            });
        }

        function ajaxSignup() {
            var data = $('#form-signup-ajax').serialize();
            $.post('https://www.topcv.vn/sign-up-ajax', data, function (response) {
                if (response.status == 'success') {
                    if (callbackRedirectUrl) {
                        if (isCallbackDownload) {
                            window.open(callbackRedirectUrl);
                            document.location.reload();
                        } else {
                            document.location.href = callbackRedirectUrl;
                        }
                    } else {
                        document.location.reload();
                    }
                } else {
                    showSignupAjaxError(response.message);
                    $('#btn-signup-ajax').text("Đăng ký").attr('disabled', false);
                }
            });
        }

        function showLoginAjaxError(message) {
            $('#alert-log-in-message').text(message);
            $('#sign-in-popup #alert-log-in-error').show();
        }

        function showSignupAjaxError(message) {
            $('#alert-sign-up-message').text(message);
            $('#sign-in-popup #alert-sign-up-error').show();
        }
    </script>
    <script src="https://www.topcv.vn/v3/js/common.js?v=2.0.1"></script>
    <script src="https://www.topcv.vn/js/jquery.form.js" type="text/javascript"></script>
    <script src="https://www.topcv.vn/v3/js/cropper.min.js"></script>
    <script>
        var URL_USER_HOME = "/",
            IS_LOGGED_IN = false;
    </script>
    <script src="https://www.topcv.vn/v3/js/vue.min.js"></script>
    <script src="https://www.topcv.vn/js/jquery.cookie.js"></script>
    <script src="https://www.topcv.vn/v2/plugins/select2/js/select2.min.js"></script>
    <script src="https://www.topcv.vn/v2/plugins/select2/js/i18n/vi.js"></script>
    <script src="https://www.topcv.vn/js/stacktrace-1.1.0.min.js"></script>
    <script src="https://www.topcv.vn/js/error-tracking.js"></script>
    <script type="text/javascript" src="https://www.topcv.vn/js/tracking.js?v=1.1.3"></script>
    <script src="https://www.topcv.vn/js/jquery.popupoverlay.js"></script>
    <script src="https://www.topcv.vn/v2/bootstrap/js/bootstrap.min.js?v=1.1.1"></script>
    <script src="https://www.topcv.vn/v3/js/axios.js"></script>
    <script src="https://www.topcv.vn/v3/js/jquery.timeago.js"></script>
    <script src="https://www.topcv.vn/v3/js/script.js?v=1.0.2"></script>
    <script src="https://www.topcv.vn/v2/plugins/switchery/switchery.min.js"></script>
    <script src="https://www.topcv.vn/v3/js/jquery-ui.min.js"></script>
    <script src="https://www.topcv.vn/v3/js/jobs.js?v=2.0.2" type="text/javascript"></script>
    <script>
        window.routes = {
            'upload-avatar-user': 'https://www.topcv.vn/ajax-upload-avatar',
        }
    </script>
    <script src="https://www.topcv.vn/v3/js/init-cropper.js?v=1.0.1"></script>
    <script>
        var URL_SET_OPTION = "https://www.topcv.vn/set-cv-option";
        var CSRF_TOKEN = "nvBbMrCD1LBKBoCTu6B1NQmbUBJJBSqrMdiEWcwY";
    </script>
    <script src="https://www.topcv.vn/v3/js/choose-template.js?v=1.0.1"></script>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="confirm-title">Xác nhận</h4>
                </div>
                <div class="modal-body">
                    <span id="confirm-message"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" id="btn-confirm-no">Quay lại</button>
                    <button type="button" id="btn-confirm-yes">Tiếp tục</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-error">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger">Lỗi</h4>
                </div>
                <div class="modal-body">
                    <span id="error-message"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-success">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-highlight">Thành công</h4>
                </div>
                <div class="modal-body">
                    <span id="success-message"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    @endsection
