<?= $this->extend('landing/layout/default') ?>

<?= $this->section('content') ?>



<div class="content">


					<div class="bannerwrap insideheaders">
						<div class="bannerleft">
							<h1 class="fadeInLeft wow">

								Contact <span>Us</span></h1>
						</div>
					</div>
				</div>>


<div class="inside_wrap support">
    <div class="content">

        <div class="supportright">




            <form method="post">


                <table cellspacing=0 cellpadding=2 border=0>
                    <div class="form-block one">
                        <input type="text" name="name" value="" size=30 class=inpts placeholder="Your Name">
                    </div>
                    <div class="form-block two">
                        <input type="text" name="email" value="" size=30 class=inpts placeholder="Your Email">
                    </div>
                    <div class="form-block three">
                        <textarea name=message class=inpts cols=45 rows=4 placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-block four">
                        <input type=submit value="Send" class=sbmt>
                    </div>
                </table>
            </form>


        </div>


        <div class="supportleft">
            <h1>Do You have any questions?</h1>
            <p>We strongly recommend that you start searching for the necessary information in the FAQ section.
                If you need advice or technical assistance, do not hesitate to contact our specialists. Customer
                support is available around the clock. You just need to send a letter or a request via the
                feedback form to promptly receive the necessary assistance. Remember that the more detailed the
                description of your problem is, the sooner it will be solved. Do not forget to indicate your
                login, if you are a registered user of the website.</p>
            <h2>Our E-mail: <a href="mailto:support@bitsplash.com">support@bitsplash.com</a></h2>
        </div>
    </div>
</div>



<?=  $this->endSection() ?>