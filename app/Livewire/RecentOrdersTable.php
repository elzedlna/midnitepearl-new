<?php

namespace App\Livewire;

use Livewire\Component;

class RecentOrdersTable extends Component
{
    public function render()
    {
        // Placeholder data for recent orders
        $orders = collect([
            [
                'id' => 'ORD-001',
                'customer_name' => 'Ahmad Ismail',
                'date' => '2025-12-12',
                'items' => 3,
                'total' => 450.00,
                'status' => 'pending',
                'payment_status' => 'paid',
            ],
            [
                'id' => 'ORD-002',
                'customer_name' => 'Izhar Halqi',
                'date' => '2025-12-11',
                'items' => 1,
                'total' => 120.00,
                'status' => 'processing',
                'payment_status' => 'paid',
            ],
            [
                'id' => 'ORD-003',
                'customer_name' => 'Ho Lee Sheet',
                'date' => '2025-12-11',
                'items' => 5,
                'total' => 890.50,
                'status' => 'shipped',
                'payment_status' => 'paid',
            ],
            [
                'id' => 'ORD-004',
                'customer_name' => 'Fatimah Abdullah',
                'date' => '2025-12-10',
                'items' => 2,
                'total' => 310.00,
                'status' => 'delivered',
                'payment_status' => 'paid',
            ],
            [
                'id' => 'ORD-005',
                'customer_name' => 'Kumar Raja',
                'date' => '2025-12-10',
                'items' => 4,
                'total' => 670.00,
                'status' => 'pending',
                'payment_status' => 'pending',
            ],
        ]);

        return view('livewire.recent-orders-table', [
            'orders' => $orders,
        ]);
    }
}
