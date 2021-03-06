<?php namespace App;
	
	use Illuminate\Database\Eloquent\Model as Eloquent;

	// Enables Schema Interaction
	use Illuminate\Database\Schema\Blueprint as Blueprint;
	use Illuminate\Support\Facades\Schema as Schema;
	use DB;

	class mfwlandingpages extends Eloquent {
		protected $table = 'mfwlandingpages';
		protected $fillable = ['name','guid','cid','landingPage'];

		public function campaign()
		{
			return $this->belongsTo('App\mfwlpcampaigns');
		}
	}
?>