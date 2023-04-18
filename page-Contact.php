
<?php
/**
 * Template Name: Page Contact (Full width)
 * Description: Page template full width
 *
 */

get_header();
?>
	<div class="contact_box ">
		<div class=" contact mb-3 ">
			<div class="box-header">
                    <p class="box-title">Liên hệ </p>
            </div>
			<div class="box_contact">
				<div class="contact-us">
					<h2 class="company-name">Ford Thăng Long ®</h2>
					<p><strong >Địa chỉ</strong> : <span  class="name_item">105 Láng Hạ, Đống Đa, Hà Nội</span></p>
					<p><strong >Điện thoại</strong> : <span  class="name_item">0934.668.808</span></p>
					<p><strong >Email</strong> : <span  class="name_item">lvkhoa@thanglongford.com.vn</span></p>
					<p><strong >Website</strong> : <span  class="name_item">https://fordlangha.vn</span></p>
				</div>
				<div class="contactus">
				<div class="form-group row">
                    <label class="col-md-3"><span data-lang="contact_fullname">Họ tên</span> <span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" data-lang="contact_fullname" placeholder="Họ tên" >
                    </div>
                </div>
				<div class="form-group row">
                    <label class="col-md-3"><span data-lang="contact_fullname">Điện thoại</span> <span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" data-lang="contact_fullname" placeholder="Điện thoại" >
                    </div>
                </div>
				<div class="form-group row">
                    <label class="col-md-3"><span data-lang="contact_fullname">Email</span> <span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" data-lang="contact_fullname" placeholder="Email" >
                    </div>
                </div>
				<div class="form-group row">
                    <label class="col-md-3"><span data-lang="contact_fullname">Địa chỉ</span> <span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" data-lang="contact_fullname" placeholder="Địa chỉ" >
                    </div>
                </div>
				<div class="form-group row">
                    <label class="col-md-3"><span data-lang="contact_fullname">Tiêu đề</span> <span class="required">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" data-lang="contact_fullname" placeholder="Tiêu đề" >
                    </div>
                </div>
				<div class="form-group row">
                    <label class="col-md-3"><span data-lang="contact_content">Nội dung</span></label>
                    <div class="col-md-9">
                        <textarea class="form-control" style="height:156px;" rows="6" data-lang="contact_content" placeholder="Nội dung" data-field="message"></textarea>
                    </div>
                </div>
				<div class="form-group row">
                    <label class="col-md-3"><span data-lang="captchatext">Mã xác nhận</span> <span class="required">*</span></label>
                    <div class="col-md-9">
                        <div class="captcha">
                            <input type="text" class="form-control d-inline" data-lang="captchatext" placeholder="Mã xác nhận" maxlength="6" data-field="captcha" data-required="1" data-title="Mã xác nhận">
                            <div class="captcha-img">
                                <img data-lang="captchatext" alt="Mã xác nhận" src="<?=  get_stylesheet_directory_uri() . '/assets/images/captcha.jpg' ?>" >
                            </div>
                           <a href="">
						   		<i class="bi bi-arrow-clockwise"></i>
						   </a>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<button class="btn btn_addcart btn_contact  btn-primary"> <i class="bi bi-cursor"></i> gửi thư</button>
					</div>
				</div>
			</div>
		</div>
		
		</div>
		<div class="contact">
			<div class="box-header">
                <p class="box-title">Bản đồ </p>
            </div>
			<div class="box_contact">
				<div class="contact_maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.724092790999!2d108.21253037479892!3d16.079801084601264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183896a7c3bf%3A0x5aaff685ab96cd22!2zNDMgSOG6o2kgSOG7kywgVGhhbmggQsOsbmgsIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1681375580932!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();





