<div class="banner-area two">
    <div class="banner-shape-two">
        <img src="{{asset("storage/images/banner-s.png")}}" alt="Shape">
        <img src="{{asset("storage/images/banner-b.png")}}" alt="Shape">
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="banner-content two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <p>{{$banner->title}}</p>
                            <h1>{{$banner->head}}</h1>
                            <div class="banner-form-area">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>
                                                    <i class='bx bx-search'></i>
                                                </label>
                                                <input type="text" class="form-control" placeholder="Search Your Job">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select>
                                                    <option>All Categories</option>
                                                    <option>Another option</option>
                                                    <option>A option</option>
                                                    <option>Potato</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group two">
                                                <label>
                                                    <i class='bx bx-location-plus'></i>
                                                </label>
                                                <input type="text" class="form-control" placeholder="Location">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn">
                                        Search Job
                                        <i class='bx bx-search'></i>
                                    </button>
                                </form>
                            </div>
                            <div class="banner-key">
                                <ul>
                                    <li>
                                        <span>Trending Keywords</span>
                                    </li>
                                    <li>
                                        <a href="">Account Manager,</a>
                                    </li>
                                    <li>
                                        <a href="">Administrative,</a>
                                    </li>
                                    <li>
                                        <a href="">Android,</a>
                                    </li>
                                    <li>
                                        <a href="">Angular,</a>
                                    </li>
                                    <li>
                                        <a href="">appASP.NET</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner-img-two">
                    <img src="{{asset("storage/images/$banner->image1")}}" alt="Banner">
                    <img src="{{asset("storage/images/$banner->image2")}}" alt="Banner">
                    <img src="{{asset("storage/images/$banner->image3")}}" alt="Banner">
                    <img src="{{asset("storage/images/$banner->image4")}}" alt="Banner">
                </div>
            </div>
        </div>
    </div>
</div>
