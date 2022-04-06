 {{--<div class="col-12 col-lg-6">
            <div>
                <br>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam id nihil reprehenderit sed tempora. Animi doloribus ipsum possimus. Alias blanditiis distinctio et illo molestiae mollitia nisi quasi quidem quos tenetur.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis itaque laboriosam minus perspiciatis voluptatem? Alias animi dolores earum in libero minima nemo quibusdam unde, vero? Atque dicta eveniet nisi quas.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur doloribus modi reprehenderit ut? Alias cupiditate optio quos suscipit velit! Aliquam beatae officiis porro possimus quae quibusdam ut velit vero voluptatum.
                </p>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div>
                <br>
                <br>
                <img src="https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-72736-dropdown-476668-image/dh-487-a0e9a6/770b761f/1635486188/audi-a3-limousine-tfsi.jpg">
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div>
                <br>
                <br>
                <img src="https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-72736-dropdown-476668-image/dh-487-a0e9a6/770b761f/1635486188/audi-a3-limousine-tfsi.jpg">
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div>
                <br>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam id nihil reprehenderit sed tempora. Animi doloribus ipsum possimus. Alias blanditiis distinctio et illo molestiae mollitia nisi quasi quidem quos tenetur.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis itaque laboriosam minus perspiciatis voluptatem? Alias animi dolores earum in libero minima nemo quibusdam unde, vero? Atque dicta eveniet nisi quas.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur doloribus modi reprehenderit ut? Alias cupiditate optio quos suscipit velit! Aliquam beatae officiis porro possimus quae quibusdam ut velit vero voluptatum.
                </p>
            </div>
        </div>--}}
        @foreach($images as $image)
            @if($loop->even)
                <div class="col-6">
                    <br>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam id nihil reprehenderit sed tempora. Animi doloribus ipsum possimus. Alias blanditiis distinctio et illo molestiae mollitia nisi quasi quidem quos tenetur.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis itaque laboriosam minus perspiciatis voluptatem? Alias animi dolores earum in libero minima nemo quibusdam unde, vero? Atque dicta eveniet nisi quas.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur doloribus modi reprehenderit ut? Alias cupiditate optio quos suscipit velit! Aliquam beatae officiis porro possimus quae quibusdam ut velit vero voluptatum.
                    </p>
                </div>
                <div class="col-6">
                    <br>
                    <br>
                    <img src="{{$image}}" alt="..." width="500" height="300">
                </div>
            @else
                <div class="col-6">
                    <br>
                    <br>
                    <img src="{{$image}}" alt="..." width="500" height="300">
                </div>
                <div class="col-6">
                    <br>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam id nihil reprehenderit sed tempora. Animi doloribus ipsum possimus. Alias blanditiis distinctio et illo molestiae mollitia nisi quasi quidem quos tenetur.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis itaque laboriosam minus perspiciatis voluptatem? Alias animi dolores earum in libero minima nemo quibusdam unde, vero? Atque dicta eveniet nisi quas.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur doloribus modi reprehenderit ut? Alias cupiditate optio quos suscipit velit! Aliquam beatae officiis porro possimus quae quibusdam ut velit vero voluptatum.
                    </p>
                </div>
            @endif
        @endforeach
