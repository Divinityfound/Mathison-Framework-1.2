<?php namespace App;
	
	use Illuminate\Database\Eloquent\Model as Eloquent;

	// Enables Schema Interaction
	use Illuminate\Database\Schema\Blueprint as Blueprint;
	use Illuminate\Support\Facades\Schema as Schema;
	use DB;

	class mfwlpcampaigns extends Eloquent {
		protected $table = 'mfwlpcampaigns';
		protected $fillable = ['name', 'description'];

		public function landingPages()
		{
			return $this->hasMany('App\mfwlandingpages');
		}
	}
?>