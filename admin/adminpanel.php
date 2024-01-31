 
<?php include 'head.php';?>
<body>
    <?php include "header.php"; ?>
   
    <div class="main-container ">
        <div class="container-xxl">
            <div class="row" >
                <div class="col-lg-4 col-6" >
                    <div class="searchbar2">
                        <div class="input-group mb-3 " >
                            <input class="form-control mt-3 " type="search" placeholder="Search" aria-label="Search" id="searchInput">
                            <div class="input-group-prepend">
                                <span class="input-group-text mt-3" onclick="handleSearch()"><i class="fa-brands fa-searchengin fa-xl" style="color: #c6cfd8;"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="co-lg-12">
                    <div class="row mt-5">
                        <div class="col-lg-3 col-12">
                            <div class="box" id="box-content"><span>daily visitors<br></span><h3>9,100</h3><p>27% since last month</p>
                                <i class="fa-solid fa-eye fa-xl" id="eye"></i> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 ">
                            <div class="box "><span>revenue <br></span><h3>$5,56757</h3><p>15.45% since last month</p>
                                <i class="fa-solid fa-square-poll-vertical fa-xl"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="box"><span>daily visitors<br></span><h3>9,100</h3><p>27% since last month</p>
                                <i class="fa-solid fa-eye fa-xl" id="eye"></i> </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="box"><span>revenue <br></span><h3>$5,56757</h3><p>15.45% since last month</p>
                                <i class="fa-solid fa-square-poll-vertical fa-xl"></i></div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-9"></div>
                        <div class="col-lg-3"><button type="button" class="btn btn-danger"data-bs-toggle="modal" data-bs-target="#myModal">add user</button></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="report-container" style="margin-top: -5em;"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="report-header"> 
                        <h1 class="recent-Articles">Recent News</h1> 
                        <button class="view">View All</button> 
                    </div> 
        
                    <div class="report-body"> 
                        <div class="report-topic-heading"> 
                            <h3 class="t-op">Article</h3> 
                            <h3 class="t-op">Views</h3> 
                            <h3 class="t-op">Comments</h3> 
                            <h3 class="t-op">Status</h3> 
                        </div> 
        
                        <div class="items"> 
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 73</h3> 
                                <h3 class="t-op-nextlvl">2.9k</h3> 
                                <h3 class="t-op-nextlvl">210</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 72</h3> 
                                <h3 class="t-op-nextlvl">1.5k</h3> 
                                <h3 class="t-op-nextlvl">360</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 71</h3> 
                                <h3 class="t-op-nextlvl">1.1k</h3> 
                                <h3 class="t-op-nextlvl">150</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 70</h3> 
                                <h3 class="t-op-nextlvl">1.2k</h3> 
                                <h3 class="t-op-nextlvl">420</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 69</h3> 
                                <h3 class="t-op-nextlvl">2.6k</h3> 
                                <h3 class="t-op-nextlvl">190</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 68</h3> 
                                <h3 class="t-op-nextlvl">1.9k</h3> 
                                <h3 class="t-op-nextlvl">390</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 67</h3> 
                                <h3 class="t-op-nextlvl">1.2k</h3> 
                                <h3 class="t-op-nextlvl">580</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 66</h3> 
                                <h3 class="t-op-nextlvl">3.6k</h3> 
                                <h3 class="t-op-nextlvl">160</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                            <div class="item1"> 
                                <h3 class="t-op-nextlvl">Article 65</h3> 
                                <h3 class="t-op-nextlvl">1.3k</h3> 
                                <h3 class="t-op-nextlvl">220</h3> 
                                <h3 class="t-op-nextlvl label-tag">Published</h3> 
                            </div> 
        
                        </div> 
                    </div> 
                </div>
            </div>
        </div> 
        
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                </div>
            </div>
        </div>
    </div>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
</body>
</html>