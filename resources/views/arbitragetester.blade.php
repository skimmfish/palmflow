<div>
Responses
{{-- @foreach($responseBody as $x){

	{{$x}}

}
@endforeach --}}
</div>
{{-- 
	This is for Ajax call which loads a popup like cotps

	const data = null;

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

xhr.open("GET", "https://crypto-arbitrage.p.rapidapi.com/crypto-arb?pair=BTC%2FUSD&consider_fees=False&selected_exchanges=exmo%20cex%20bitstamp%20hitbtc");
xhr.setRequestHeader("X-RapidAPI-Host", "crypto-arbitrage.p.rapidapi.com");
xhr.setRequestHeader("X-RapidAPI-Key", "60652fcb2fmsh392a2b3d4947dd8p105f70jsn425779b7b40e");

xhr.send(data);
	
	--}}


	{{-- 
		

$curl = curl_init();
API_2
curl_setopt_array($curl, [
	CURLOPT_URL => "https://crypto-arbitrage.p.rapidapi.com/crypto-arb?pair=BTC%2FUSD&consider_fees=False&selected_exchanges=exmo%20cex%20bitstamp%20hitbtc",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: crypto-arbitrage.p.rapidapi.com",
		"X-RapidAPI-Key: 60652fcb2fmsh392a2b3d4947dd8p105f70jsn425779b7b40e"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
--}}