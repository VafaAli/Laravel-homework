@extends('layout')


@section('content')

        <!-- PAGE HEADER -->
        <section class="trd-page-header">
            <div class="container">
                <div class="row">
                    <h1 class="trd-page-title">Blog Post</h1>
                </div>
            </div>
        </section>
        <!-- PAGE HEADER END -->

        <!-- PAGE CONTENTS -->
        <section class="trd-page-contents-wrapper">
            <div class="container">
                <div class="row">

                    <!-- Page Contents -->
                    <div class="trd-page-contents col-md-12 col-sm-12 col-xs-12">

                        <!-- Post title -->
                        <div class="trd-post-header-meta">
                            <h1 class="trd-post-title">Development strategy for success</h1>
                            <ul class="trd-post-meta">
                                <li class="trd-post-date">March 21, 2016</li>
                                <li class="trd-author-link"><a href="#">admin</a></li>
                                <li class="trd-comments-count"><a href="#">3 Comments</a></li>
                            </ul>
                        </div>
                        <!-- End -->

                        <!-- Featured Image -->
                        <div class="trd-post-featured-image-wrapper">
                            <img src="images/featured-img.jpg" alt="Featured Image">
                        </div>
                        <!-- End  -->

                        <!-- Post Details -->
                        <div class="trd-post-details trd trd-inner-section">
                            <p>
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No ones rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivials example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right a find
                            </p>

                            <div class="trd-blockquotes">
                                <p>perfectly simple and easy to distinguish. In a free house power choice make a <span class="trd-highlight-text">better</span> business</p>
                            </div>

                            <p>
                                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing a the duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man there
                            </p>

                            <br>

                            <p>
                                On the other hand, we denounce with righteous indignation and among a men whos are of pleasure of the moment, so blinded by desire they cannot foresee the pain good On the other hand, we denounce with righteous indignation and dislike men whos areas of pleasure of the moment, so blinded by desire, that they cannot foresee the pain decio
                            </p>
                        </div>
                        <!-- End -->

                        <!-- POST METAS -->
                        <div class="trd-post-tags-wrapper trd trd-inner-section">
                            <a href="#" class="trd-post-tags">finance</a>
                            <a href="#" class="trd-post-tags">marketing</a>
                        </div>
                        <!-- END -->

                        <!-- COMMENTS -->
                        <div class="trd-user-comment-wrapper trd trd-inner-section">
                            <h2 class="trd-content-inner-title">Total <span class="trd-highlight-text">Comments</span></h2>
                            <!-- COMMENTS WRAPPER -->
                            <div class="trd-comments-wrapper">
                                <!-- USER IMG -->
                                <div class="trd-users-img">
                                    <img src="images/clients-img-1.png" alt="User">
                                </div>
                                <!-- END -->

                                <!-- TEXT -->
                                <div class="trd-comments-details">
                                    <div class="trd-users-desc">
                                        <h3>David Neo</h3>
                                        <span class="trd-comment-post-date">23 March, 2016</span>
                                    </div>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who beguiled and demoralized by the of pleasure</p>
                                    <a href="#" class="trd-reply-btn">Reply</a>
                                </div>
                                <!-- END -->
                            </div>
                            <!-- END -->
                        </div>
                        <!-- END -->

                        <!-- COMMENTS FORM -->
                        <div class="trd-comments-form trd-inner-section">
                            <h2 class="trd-content-inner-title">Post Your <span class="trd-highlight-text">Comments</span></h2>

                            <form action="#">
                                <fieldset>
                                    <input type="text" name="trd-user-name" id="trd-user-name" placeholder="Name">
                                    <input type="email" name="trd-user-email" id="trd-user-email" placeholder="Email">
                                    <input type="text" name="trd-user-website" id="trd-user-website" placeholder="Website">
                                </fieldset>
                                <textarea name="trd-user-message" id="trd-user-message" cols="30" rows="10" placeholder="Your Comment"></textarea>

                                <input type="submit" value="Submit" class="trd-btn">
                            </form>
                        </div>
                        <!-- END -->
                    </div>
                    <!-- End -->
                </div>
            </div>
        </section>
        <!-- PAGE CONTENTS END -->

@stop