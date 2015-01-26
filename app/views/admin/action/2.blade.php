Ban user<br>
<form action="?action=2">
	<input type="hidden" value="2" name="action" ><input type="text" name="gebruikersnaam" value={{Input::get('gebruikersnaam')}}>&nbsp;<input type="submit" value="BAN!">
</form>

@if (Input::has('gebruikersnaam'))
	<a href={{URL::to('/admin/ban?gebruikersnaam='.Input::get('gebruikersnaam'))}}><button>Zeker</button></a>&nbsp;<a href="?action=2"><button>Niet Zeker</button></a>
@endif