<footer class="site-footer footer-default">
    <div class="footer-main-content_ruouvang">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-main-content_ruouvang-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-ruouvang uni-uppercase">SNEAKER</h3>
                            <div class="widget-content">
                                <div class="footer-lienhe-ruouvang">
                                    <!-- <h2>webruouvang.vn | Không Chỉ Là Rượu Vang & Bia</h2> -->
                                    <ul>
                                        <li><span>Địa chỉ:</span> <?= $rowConfig['content_home1'] ?> </li>
                                        <li><span>Email:</span>
                                            <?= $rowConfig['content_home2'] ?></li>
                                        <li>
                                            <span>Phone:</span> <?= $rowConfig['content_home3'] ?>
                                        </li>
                                    </ul>
                                    <?php include DIR_SOCIAL."MS_SOCIAL_RUOUVANG_0002.php";?>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_ruouvang-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-ruouvang uni-uppercase">Sản phẩm</h3>
                            <div class="widget-content">
                                <div class="footer-link-ruouvang">
                                    <ul>
                                        <li>
                                            <a href="product/hang-dat-truoc" title="HÀNG ĐẶT TRƯỚC">
                                                HÀNG ĐẶT TRƯỚC							</a>
                                        </li>
                                        <li>
                                            <a href="product/sale-off" title="SALE OFF">
                                                SALE OFF							</a>
                                        </li>
                                        <li>
                                            <a href="product/thuong-hieu-khac" title="THƯƠNG HIỆU KHÁC">
                                                THƯƠNG HIỆU KHÁC							</a>
                                        </li>
                                        <li>
                                            <a href="product/nike" title="NIKE">
                                                NIKE							</a>
                                        </li>
                                        <li>
                                            <a href="product/adidas" title="ADIDAS">
                                                ADIDAS							</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-main-content_ruouvang-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-ruouvang uni-uppercase">FANPAGE FACEBOOK</h3>
                            <div class="widget-content">
                                <div class="footer-lienhe-ruouvang">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/sneakerunisex/&tabs=timeline&width=360&height=248&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=220693348668109" width="360" height="248" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    function load_url (id, name, price) {
        var name1 = encodeURIComponent(name);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           // document.getElementById("demo").innerHTML = this.responseText;
           // alert(this.responseText);
           // alert('thanh cong.');
           // window.location.href = "/gio-hang";
           if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                  window.location = '/gio-hang';
              }else{
                  location.reload();
              }  
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name1+"&product_price="+price+"&product_quantity=1&action=add&product_size=");
        // xhttp.send();        
    }
</script>