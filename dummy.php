<script type="text/javascript">
const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

xhr.open("GET", "https://imdb8.p.rapidapi.com/title/auto-complete?q=game%20of%20thr");
xhr.setRequestHeader("x-rapidapi-key", "c3462f480dmshd3aa40c58e5f16dp1af210jsn76f6c746fe60");
xhr.setRequestHeader("x-rapidapi-host", "imdb8.p.rapidapi.com");

xhr.send()
</script>