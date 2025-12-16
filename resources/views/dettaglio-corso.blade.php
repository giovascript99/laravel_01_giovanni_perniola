<x-layout>
    <header>
        <div class="container-fluid header">
            <div class="row h-custom justify-content-around align-items-center">
                <div class="col-md-6 col-12">
                    <img src="{{$corso['img']}}" alt="{{$corso['corso']}}" class="img-fluid">
                </div>
                <div class="col-md-4 col-12">
                    <h3 class="text-center text-white display-5 fw-semibold">{{$corso['corso']}}</h3>
                    <p class="text-center text-white h5">{{$corso['descrizione']}}</p>
                </div>
            </div>
        </div>
    </header>
</x-layout>