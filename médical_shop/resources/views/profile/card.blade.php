<x-app-layout>
<!-- ----------------cart items------------->
<div class="small-container cart-page">
<form action="{{ route('commande') }}" method="post">
    {{-- @csrf
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr> --}}
        @foreach ($products as $product)
        <input type="hidden" value="{{$product->id}}" name=item[{{ $loop->index}}][id]>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="/image/{{$product->image}}" width="5%">
                    <div>
                        <p>{{ $product->name }}</p>
                        <small>{{ $product->cost }}</small>
                        <a href="{{ route('panier.card',['id' => $product->id, 'qty' => 0]) }}">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="{{ $cards[$loop->index]['qty'] }}" name=item[{{ $loop->index }}][quantite]></td>
            <td>35.00 DH</td>
        </tr>
        @endforeach
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td><input onblur="findTotal()" type="text"  name="qty" id="qty1"/ ></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td><input onblur="findTotal()" type="text"  name="qty" id="qty2"/ ></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="text" name="total" id="total"/></td>
            </tr>
            <tr>
            <td><button class="btn">Buy Now &#8594; </button></td>


            </tr>
        </table>

</form>
</div>

</x-app-layout>


<script type="text/javascript">
    function findTotal(){
        var arr = document.getElementsByName('qty');
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }
        document.getElementById('total').value = tot;
    }
</script>