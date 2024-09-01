<script src="https://cdn.tailwindcss.com"></script>

{{-- @php --}}
{{-- @endphp --}}

<h1 class="text-3xl">
    {{$heading}}
</h1>

{{-- 
<?php foreach ($listings as $listing):?>
    <h3><?php echo $listing['title'];?></h3>
    <p><?php echo $listing['title'];?></p>
<?php endforeach; ?>
--}}

@if(count($listings)==0)
<p class="text-red-400">no listings</p>
@endif
@foreach ($listings as $listing)
<h3 class="text-green-500">{{$listing['title']}}</h3>
<p>{{$listing['subtitle']}}</p>
@endforeach