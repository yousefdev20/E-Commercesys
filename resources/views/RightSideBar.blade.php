<div class="col-lg-2 col-sm-2 ml-1 mr-1 ">
	<div class="list-group text-secondary text-bold">
		
	    <a href="#" class="list-group-item text-secondary text-bold">
	    	<span>
			<i class="fa fa-file-user"></i>
			</span>
	    	My ACcount
		</a>
	    <a href="#" class="list-group-item text-secondary text-bold">My Profile</a>
	    <a href="#" class="list-group-item text-secondary text-bold">My Orders</a>
	    <a href="#" class="list-group-item text-secondary text-bold">My Store Receipts</a>
	    <a href="#" class="list-group-item text-secondary text-bold">My Addresses</a>
	    <a href="#" class="list-group-item text-secondary text-bold">My Payment Details</a>
        <a class="list-group-item text-secondary text-bold" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
</div>
</div>