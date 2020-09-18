<div>
	<form method="POST" action="/profile">
	    @csrf
	    <label for="name" class="required">Name:</label>
	    <input wire:model="name" type="text" name="name" />
	    @error('name')
	    <p class="text-red-500 mt-1">
	    	{{$message}}
	    </p>
	    <label for="email" class="required">Email:</label>
	    <input wire:model="email" type="email" name="email" />
	    <label for="phone" class="required">Phone:</label>
	    <input wire:model="phone" type="text" name="phone" />
	    <label for="message" class="required">Message:</label>
	    <textarea wire:model="message" class="textarea" name="message" value="{{old('message')}}">{{old('message')}}
	    </textarea>
	    <button type="submit" class="button" name="submit">Submit</button>
	</form>
</div>
