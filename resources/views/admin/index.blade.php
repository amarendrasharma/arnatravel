@extends('layouts.admin')
@section('script')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js" defer></script>
@endsection
@section('content')
<div>
	Dashboard
	<script>
		(async () => {
  try {
    const permission = await Notification.requestPermission();
    console.log(permission);
    const options = {
      body: "body",
      icon:
        "https://www.iconninja.com/files/926/373/306/link-chain-url-web-permalink-web-address-icon.png"
    };
    const n = new Notification("title", options);
    await new Promise(resolve => {
      setTimeout(() => {
        n.close();
        resolve();
      }, 5000);
    });
  } catch (error) {
    console.log(error);
  }
})();

	</script>
</div>
@endsection