@extends("layouts.layout")


@section('content')
    <div class="flex justify-center items-center flex-col">

        <div class="text-6xl mb-10 px-3 py-2">Choose Your <span class="underline decoration-4 decoration-blue-600 underline-offset-8">Pizza</span></div>

        <form action="" method="POST" class="flex flex-col">
            @csrf
            <label for="pizza_name" >Pizza Name</label>
            <select name="pizza_name" id="pizza_name" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400 mb-1">
                <option value="Onion">Onion</option>
                <option value="Paneer">Paneer</option>
                <option value="Capsicum">Capsicum</option>
            </select>

            <label for="pizza_base" >Pizza Base</label>
            <select name="pizza_base" id="pizza_base" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400 mb-1">
                <option value="Fresh Pan">Fresh Pan</option>
                <option value="Thin Crust">Thin Crust</option>
                <option value="Cheese Crust">Cheese Crust</option>
            </select>

            <label for="pizza_quantity" >Quantity</label>
            <select name="pizza_quantity" id="pizza_quantity" class="rounded px-3 focus:outline-0 focus:ring-2 focus:ring-blue-400  mb-1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <button class="rounded-lg bg-green-400 my-2 px-0 py-2 text-2xl">Add</button>
        </form>

        <a href="" class="rounded-lg my-2 px-5 py-2 text-2xl bg-blue-400">Order list</a>
    </div>
@endsection
