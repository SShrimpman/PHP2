<div class="container pt-5">
    <div class="row">
        <div class="col-4">
            @component('components.card.card',
                [
                    'image' => 'https://www.hdcarwallpapers.com/walls/abt_audi_a6_3_0_tdi_avant_2019_4k-HD.jpg',
                    'title' => 'Title 1',
                    'description' => 'Desc 1',
                ]
            )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                    'image' => 'https://www.hdcarwallpapers.com/walls/abt_audi_rs_6_nogaro_edition_4k-HD.jpg',
                    'title' => 'Title 2',
                    'description' => 'Desc 2',
                ]
            )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                    'image' => 'https://besthqwallpapers.com/Uploads/7-10-2019/107511/thumb2-abt-tuning-audi-q8-4k-2019-cars.jpg',
                    'title' => 'Title 3',
                    'description' => 'Desc 3',
                ]
            )
            @endcomponent
        </div>
    </div>
</div>
