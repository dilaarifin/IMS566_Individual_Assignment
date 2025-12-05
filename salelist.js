function renderSaleList() {
    const tbody = document.querySelector('.sale-list table tbody');
    tbody.innerHTML = '';

    Orders.forEach(order => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${order.productName}</td>
            <td>${order.productNumber}</td>
            <td>${order.quantity}</td>
            <td>${order.paymentStatus}</td>
            <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'primary'}">${order.status}</td>
            <td><button class="details-btn">Details</button></td>
        `;
        tbody.appendChild(tr);

        // Add details button functionality if modal exists
        tr.querySelector('.details-btn')?.addEventListener('click', () => {
            showOrderDetails(order);
        });
    });
}

// Call render function after Orders array is loaded
renderSaleList();
