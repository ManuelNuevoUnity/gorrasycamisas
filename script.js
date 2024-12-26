document.addEventListener("DOMContentLoaded", function () {
    const designSection = document.getElementById("designSection");
    const personalInfoSection = document.getElementById("personalInfoSection");
    const paymentSection = document.getElementById("paymentSection");
    const uploadReceiptSection = document.getElementById("uploadReceiptSection");
    const successSection = document.getElementById("successSection");
  
    const confirmDesignButton = document.getElementById("confirmDesignButton");
    const confirmPersonalInfoButton = document.getElementById("confirmPersonalInfoButton");
    const confirmPaymentButton = document.getElementById("confirmPaymentButton");
    const uploadReceiptButton = document.getElementById("uploadReceiptButton");
  
    const paymentMethodSelect = document.getElementById("paymentMethod");
    const paymentOptions = document.getElementById("paymentOptions");
  
    confirmDesignButton.addEventListener("click", function () {
      designSection.classList.add("hidden");
      personalInfoSection.classList.remove("hidden");
    });
  
    confirmPersonalInfoButton.addEventListener("click", function () {
      personalInfoSection.classList.add("hidden");
      paymentSection.classList.remove("hidden");
    });
  
    paymentMethodSelect.addEventListener("change", function () {
      const selectedValue = paymentMethodSelect.value;
      if (selectedValue === "cash") {
        // Mostrar opciones de pago en efectivo
        paymentOptions.innerHTML = `
          <p>Genera tu código QR o código de barras para pagar en tienda física.</p>
          <!-- Aquí se generaría el código QR o código de barras -->
        `;
      } else {
        // Mostrar opciones de pago con tarjeta
        paymentOptions.innerHTML = `
          <label for="cardNumber">Número de Tarjeta:</label>
          <input type="text" id="cardNumber" required>
          <!-- Otros campos de tarjeta y opciones de meses sin intereses -->
        `;
      }
    });
  
    confirmPaymentButton.addEventListener("click", function () {
      paymentSection.classList.add("hidden");
      if (paymentMethodSelect.value === "cash") {
        uploadReceiptSection.classList.remove("hidden");
      } else {
        successSection.classList.remove("hidden");
      }
    });
  
    uploadReceiptButton.addEventListener("click", function () {
      uploadReceiptSection.classList.add("hidden");
      successSection.classList.remove("hidden");
    });
  });
  