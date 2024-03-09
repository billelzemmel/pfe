<template>




</template>
<script>
  const options = {
    apiUrl: "https://api.opencopilot.so/backend", 
    initialMessage: "كيف يمكنني مساعدتك",
    language: "arabic",
    token: "H0iIj9DwAllWulkE",
    defaultOpen: true,
    triggerSelector: "#triggerSelector", 
    socketUrl: "https://api.opencopilot.so",
    headers: { 
      Authorization: "Bearer your_auth_token_goes_here",
      AnyKey: "AnyValue"
    },
    user: {
      name: "بلال",
      language: "arabic",
      avatar: "https://www.newvisiontheatres.com/wp-content/uploads/2023/01/Ronaldo-2.jpeg"  // Replace with the URL of your desired bot image
    },
    containerProps: {
      style: {
        width: "400px",
        height: "500px",
        position: "fixed",
        bottom: "0",
        right: "0",
        zIndex: "9999",
      },
      className: "your class name" 
    }
  }

  window.addEventListener("DOMContentLoaded", () => initAiCoPilot(options));
</script>


