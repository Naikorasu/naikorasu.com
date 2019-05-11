<?php
/**
 * Created by PhpStorm.
 * User: naikorasu
 * Date: 30/03/19
 * Time: 12.31
 */
?>

<section id="contact">
    <div class="inner">
        <section>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="6"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                    <li><input type="reset" value="Clear" /></li>
                </ul>
            </form>
        </section>
        <section class="split">
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-envelope"></span>
                    <h3>Email</h3>
                    <a href="#">naikorasu@naikorasu.com</a><br />
                    <a href="#">me@naikorasu.com</a><br />
                    <a href="#">naikorasu@gmail.com</a>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-phone"></span>
                    <h3>Phone</h3>
                    <span>(08788) 6698-211</span>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-home"></span>
                    <h3>Address</h3>
                    <span>Gading Serpong<br />Kelapa Dua<br />Tangerang<br />15810</span>
                </div>
            </section>
        </section>
    </div>
</section>
