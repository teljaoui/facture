
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});


document.addEventListener("DOMContentLoaded", function () {
  const buttonAjouter = document.querySelector("#ajouterLigne");
  const tbody = document.querySelector("tbody");
  const totalElement = document.querySelector(".devis-total p");

  function attachEventListeners(row) {
      row.querySelector(".qty").addEventListener("input", updateAmount);
      row.querySelector(".price").addEventListener("input", updateAmount);
      const deleteButton = row.querySelector(".delete-row");

      if (deleteButton) {
          deleteButton.addEventListener("click", function () {
              if (tbody.children.length > 1) { 
                  row.remove();
                  updateTotal();
              }
          });
      }
  }

  function updateAmount() {
      const row = this.closest("tr");
      const qty = parseFloat(row.querySelector(".qty").value) || 0;
      const price = parseFloat(row.querySelector(".price").value) || 0;
      const amount = (qty * price).toFixed(2);
      row.querySelector(".amount").innerText = amount;
      updateTotal();
  }

  function updateTotal() {
      let total = 0;
      document.querySelectorAll(".amount").forEach(span => {
          total += parseFloat(span.innerText) || 0;
      });
      totalElement.innerText = total.toFixed(2);
  }

  buttonAjouter.addEventListener("click", function () {
      const newRow = document.createElement("tr");

      newRow.innerHTML = `
          <td>
              <select class="form-select">
                  <option value="" selected disabled>Sélectionner un produit</option>
                  <option value="1">Produit 1</option>
                  <option value="2">Produit 2</option>
                  <option value="3">Produit 3</option>
              </select>
          </td>
          <td>
              <input type="number" class="form-control qty" min="1" value="1">
          </td>
          <td>
              <input type="number" class="form-control price" min="0" value="0">
          </td>
          <td class="text-center">
              <span class="amount">0.00</span>
          </td>
          <td class="text-end">
              <a href="javascript:void(0);" class="btn-action delete-row">
                  <i class="fa-solid fa-trash text-danger"></i>
              </a>
          </td>
      `;

      tbody.appendChild(newRow);
      attachEventListeners(newRow);
  });

  document.querySelectorAll("tbody tr").forEach(attachEventListeners);
});
