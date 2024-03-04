<div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-news-block">
                        <h3 class="news-title">
                            <span>ข่าวล่าสุด</span>
                        </h3>
                        <div class="all-news">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="post-block-wrapper post-float-half clearfix">
                                        <div class="post-thumbnail">
                                            <a href="single-post.html">
                                                <img class="img-fluid" src="asset/frontend/images/news/seee.png"
                                                    alt="post-thumbnail" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-category" href="post-category-2.html">sentinel</a>
                                            <h2 class="post-title mt-3">
                                                <a href="single-post.html">LOUD และ Sentinels มีคุณสมบัติไปมาดริดจากอเมริกา</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="posted-time">an hour ago</span>
                                                <span class="post-author">by
                                                    <a href="author.html">namo</a>
                                                </span>
                                            </div>
                                            <p>
                                                ดัง และ เซนติเนล กลายเป็นทีมสุดท้ายที่ผ่านเข้ารอบมาสเตอร์มาดริดโดยโค่นล้ม ตามลําดับเพื่อไปถึงรอบชิงชนะเลิศ VCT Americas Kickoff
                                                และ LOUD จะเล่นในวันอาทิตย์ในการแข่งขันกลุ่ม B สําหรับเมล็ดพันธุ์แรกของอเมริกาที่มาดริด...
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="post-block-wrapper post-float-half clearfix">
                                        <div class="post-thumbnail">
                                            <a href="single-post.html">
                                                <img class="img-fluid" src="asset/frontend/images/news/news-07.jpg"
                                                    alt="post-thumbnail" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-category" href="post-category-2.html">ด่วน</a>
                                            <h2 class="post-title mt-3">
                                                <a href="single-post.html">ข่าวด่วน ณรากรณ์วิตกกังวล ไม่มีเน็ต</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="posted-time">4 hours ago</span>
                                                <span class="post-author">by
                                                    <a href="author.html">อุ้ม</a>
                                                </span>
                                            </div>
                                            <p>
                                                ณรากรณ์ได้ยืนรอต่อคิวซื้ออาหารแต่ต้องประสบปัญหาธนาคารล่ม...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="pagination-wrapper" class="pagination-wrapper">
                        <ul class="pagination justify-content-center">
                            <li class="page-item active">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-angle-double-left mr-2"></i></span>
                                    <span class="">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="">Next</span>
                                    <span aria-hidden="true"><i class="fa fa-angle-double-right ml-2"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h3 class="news-title">
                                <span>ผู้ใช้ยอดนิยม</span>
                            </h3>
                            <div class="post-list-block">
                                <div class=" review-post-list">
                                    @foreach ($data as $item)
                                    <div class="top-author">
                                        <img src="{{asset('storage') }}/{{ $item->profile_photo_path }}" alt="author-thumb">
                                        <div class="info">
                                            <h4 class="name"> <a href="author.html">
                                                    {{ $item->name ?? "ไม่พบข้อมูล"}}
                                                    {{ $item->lastname }}
                                                </a>
                                            </h4>
                                            <ul class="list-unstyled">

                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
