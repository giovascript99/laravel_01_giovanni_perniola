<x-layout>
    <header>
        <div class="container-fluid header">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-4 bg-dark rounded py-2">
                    <h2 class="text-white text-color text-center">CHI SIAMO</h2>
                    <p class="text-white text-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum facere voluptates repellendus provident corporis vero in quidem officiis? Inventore ab eaque voluptates aliquid deserunt omnis ipsam, dolores ducimus, possimus quos earum voluptatem fugit delectus vero reprehenderit officiis eius quasi assumenda repellendus optio. Corporis aliquam laudantium optio voluptate? Maiores, accusantium consequatur.</p>
                </div>
                <div class="col-4 bg-dark rounded p-3 text-center">
                    <img src="https://picsum.photos/400/300" alt="immagine casuale" class="shadow rounded img-fluid">
                </div>
            </div>
        </div>
    </header>
    
    <section>
        <div class="container userHeight">
            <div class="row h-100 align-items-center justify-content-around">
                @foreach ($users as $user)
                <div class="col-12 col-md-4">
                    <x-cardUtente
                    name="{{$user['name']}}"
                    surname="{{$user['surname']}}"
                    role="{{$user['role']}}"
                    />
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>