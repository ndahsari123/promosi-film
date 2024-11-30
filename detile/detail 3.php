<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Film paling populer</title>
    <link rel="stylesheet" href="../css/detile.css">
    <link rel="stylesheet" href="Bootstrap 5/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
    <style>
        .blog-single, .article, .card{
            background-color: #10375C;
        }
        .article-title, h2, .article-content {
            color:#FEF9F2;
        }
    </style>
</head>
<body style="background: #011228;">
    <div class="blog-single gray-bg"></div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <img src="gambar/avatar.png" class="icon-why-us" alt="icon"  style="width: auto;">
                        
                        </div>
                        <div class="article-title">
                            <h6><a href="#">Kumpulan pemain</a></h6>
                            <h2 style="color:#FEF9F2;" >Fakta Menarik Alur Cerita Avatar: The Last Airbender 2024, Sudah Tahu?</h2>
                            <div class="media">
                                <div class="avatar">
                                    <img src="gambar/detail 2.jpg" class="icon-why-us" alt="icon" style="width: 100px;"> 
                                </div>
                                <div class="media-body">
                                    <label>Rachel Roth</label>
                                    <span>26 FEB 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="article-content">
                            <p>Salah satu animasi legendaris dunia ‘Avatar’, kini kembali diperbincangkan. Hal ini dikarenakan animasi tersebut kembali diadaptasi menjadi live action dengan judul ‘Avatar The Last Airbender’dan telah mulai ditayangkan sejak tanggal 22 Februari di platform Netflix.</p>
                            <p>Bagi para penggemar animasi, tentunya familiar dengan kekhasan alur cerita Avatar yang selalu disajikan dengan detail dan daya tarik yang memukau. Namun, di balik alur cerita tersebut,
                                terdapat sejumlah fakta menarik mengenai film ‘Avatar The Last Airbender’ yang mungkin belum semua orang sadari.</p>
                             <h4 style="color:#FEF9F2;" >SINOPSIS FILM AVATAR THE LAST AIRBENDER</h4>
                            <img src="gambar/avatarbaru.jpg" class="icon-why-us" alt="icon"  style="width: auto;">
                            <p>Avatar: The Last Airbender mengisahkan tentang perjalanan seorang laki-laki bernama Aang yang merupakan seorang Avatar,
                             seorang manusia yang memiliki kemampuan untuk mengendalikan keempat elemen: air, tanah, api, dan udara.</p>
                            <blockquote>

                        
                                <p>Aang tidak menyadari bahwa dirinya merupakan avatar berikutnya setelah Avatar Roku dari Negara Api. Ia baru menyadari peran besarnya ketika dunia berada dalam konflik besar melawan Negara Api yang dipimpin oleh Raja Sozin (Hiro Kanagawa).</p>
                                <p>Untuk bisa belajar menguasai beberapa elemen, Aang bersama sahabatnya, Katara dan Sokka melakukan perjalanan ke Suku Air Utara. Dalam perjalanan tersebut, Aang dan sahabat-sahabatnya menghadapi beberapa rintangan.</p>
                                <p>Mereka dikejar oleh putra Raja Api Ozai dan pamannya Iroh. Kedua berharap dapat menangkap Avatar untuk memulihkan kehormatannya. Selain itu, Aang juga dikejar oleh Zhao, laksamana Negara Api yang bercita-cita memenangkan hati Ozai.
                                    Apakah Aang akan berhasil menguasai semua elemen dan menyelamatkan dunia? Untuk mengetahui kisah selengkapnya detikers dapat menyaksikan serial live ection dari Avatar: the Last Airbender di saluran Netflix. </p>

                                  <p class="blockquote-footer">Yuk baca artikel lainnya<cite title="Source Title">Detik sumut</cite></p>
                            </blockquote>
                        </div>
                        <div class="nav tag-cloud">
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">Travel</a>
                            <a href="#">Web Design</a>
                            <a href="#">Marketing</a>
                            <a href="#">Research</a>
                            <a href="#">Managment</a>
                        </div>
                    </article>
                    <div class="contact-form article-comment">
                        <h4>Leave a Reply</h4>
                        <form id="contact-form" method="POST" action="submit_comment.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="name"  id="name" placeholder="Name *" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                            
                        <h2>Komentar</h2>
                        <div class="comment-container">
                            <?php
                            
                            include "koneksi.php";

                            $result = $conn->query("SELECT name, comment, created_at FROM comments ORDER BY created_at DESC");
                            if ($result->num_rows > 0){
                                while ($row = $result->fetch_assoc()){
                                    echo '<div class="comment">';
                                    echo '<p class="comment-author">'.htmlspecialchars($row['name']).'</p>';
                                    echo '<p class="comment-author">'.htmlspecialchars($row['comment']) . '</p>';
                                    echo '</div>';
                                }
                            }else{
                                echo '<p> Data Kosong</p>';
                            }
                            $conn->close();
                            ?> 
                            <!-- Tambahkan komentar lain di sini -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">                                    
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Categories Clouds</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled categories-clouds m-b-0">
                                <li><a href="javascript:void(0);">eCommerce</a></li>
                                <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                                <li><a href="javascript:void(0);">Creative UX</a></li>
                                <li><a href="javascript:void(0);">Wordpress</a></li>
                                <li><a href="javascript:void(0);">Angular JS</a></li>
                                <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                                <li><a href="javascript:void(0);">Website Design</a></li>
                                <li><a href="javascript:void(0);">HTML5</a></li>
                                <li><a href="javascript:void(0);">Infographics</a></li>
                                <li><a href="javascript:void(0);">Wordpress Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Postingan Populer</h2>                        
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_post">
                                        <p class="m-b-0">Tanggal Rilis</p>
                                        <span>25 Januari 2018 (Indonesia)</span>
                                        <div class="img-post">
                                            <img src="gambar/avatar1.jpg" alt="Awesome Image">                                        
                                        </div>                                            
                                    </div>
                                    <div class="single_post">
                                        <p class="m-b-0">Tanggal Rilis</p>
                                        <span>8 September 2016</span>
                                        <div class="img-post">
                                            <img src="gambar/avatar7.jpg" alt="Awesome Image">                                            
                                        </div>
                                    </div>
                                    <div class="single_post">
                                        <p class="m-b-0">Tanggal Rilis</p>
                                        <span> 30 April 2022</span>
                                        <div class="img-post">
                                            <img src="gambar/avatar11.jpg" alt="Awesome Image">        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Kumpulan Film Terbaru</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled instagram-plugin m-b-0">
                                <li><a href="javascript:void(0);"><img src="gambar/avatar3.jpg" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="gambar/avatar4.jpeg" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="gambar/avatar5.jpg" alt="image description"></a></li>
                                <li><a href="javascript:void(0);"><img src="gambar/avatar6.jpg" alt="image description"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Hubungi kami untuk mengetahui lebih lanjut.</h2>
                                <small>Dapatkan produk/berita kami lebih awal dari yang lain, mari menghubungi kami.</small>
                        </div>
                        <div class="body widget newsletter">                        
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>