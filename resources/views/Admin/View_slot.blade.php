@include('Admin.header')

<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

<style>
    .btn-pill {
        border-radius: 50px;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        padding: 0.5rem 1.5rem;
        font-weight: 500;
    }

    .btn-pill.btn-success {
        background-color: #198754;
        border: none;
        color: #ffffff;
    }

    .btn-pill.btn-success:hover {
        background-color: #157347;
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .btn-pill.btn-danger {
        background-color: #dc3545;
        border: none;
        color: #ffffff;
    }

    .btn-pill.btn-danger:hover {
        background-color: #bb2d3b;
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        background: #ffffff;
        border: none;
    }

    .card-header {
        background: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .card-title {
        font-size: 1.75rem;
        color: #343a40;
        display: flex;
        align-items: center;
    }

    .slot-button {
        padding: 10px;
        margin: 5px;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        border: 1px solid #ccc;
        width: 80px;
    }

    .slot-grid {
        display: flex;
        flex-wrap: wrap;
    }

    .slot-button.booked {
        background-color: #28a745;
        color: #ffffff;
        pointer-events: none;
    }

    .slot-indicator {
        padding: 5px 10px;
        border-radius: 5px;
        color: #ffffff;
        font-size: 14px;
        margin: 5px;
        display: inline-block;
    }

    .booked {
        background-color: #28a745; /* Green */
    }

    .indicator-container {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 1000;
    }
</style>

<div class="container mt-4">
    @if (session('success') || session('error'))
        <div class="toast-container position-fixed top-0 end-0 p-3">
            @if (session('success'))
                <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>
    @endif

    <div class="pagetitle mb-4">
        <h1 style="font-size: 35px">
            <i class="bi bi-calendar-check-fill"></i> Appointment Slots
        </h1><br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door-fill me-1"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="bi bi-calendar-event-fill me-1"></i> Appointments
                </li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <h5 class="card-title"><i class="bi bi-clock-fill me-2"></i> Check Slots for Date</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="indicator-container">
                <span class="slot-indicator booked">Booked Slot</span>
            </div>

            <div class="mb-4">
                <label for="setDate" class="form-label">Date</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar-date-fill"></i></span>
                    <input type="text" class="form-control animate__animated animate__fadeIn" name="adminDateInput" id="setDate" placeholder="Select Date">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Time Slots</label>
                <div id="adminTimeSlotContainer" class="slot-grid d-flex flex-wrap justify-content-start">
                </div>
            </div>
        </div>
    </div>
</div>

@include('Admin.footer')


<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    let selectedSlot = null;

    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#setDate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            onChange: function(selectedDates, dateStr) {
                if (dateStr) {
                    loadAdminTimeSlots(dateStr);
                }
            }
        });

        document.getElementById('markUnavailableButton').addEventListener('click', async function() {
            if (selectedSlot) {
                await markSlotUnavailable(selectedSlot);
                loadAdminTimeSlots(document.getElementById('setDate').value);
            } else {
                alert("Please select a slot to mark as unavailable.");
            }
        });
    });

    async function loadAdminTimeSlots(date) {
        const timeSlotContainer = document.getElementById('adminTimeSlotContainer');
        timeSlotContainer.innerHTML = '';
        selectedSlot = null;
        try {
            const { bookedSlots, unavailableSlots } = await fetchBookedSlots(date);

            const availableSlots = [
                "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM",
                "1:00 PM", "2:00 PM", "3:00 PM", "4:00 PM",
                "5:00 PM", "6:00 PM"
            ];

            availableSlots.forEach(slot => {
                const slotButton = document.createElement('div');
                slotButton.className = 'slot-button' +
                    (bookedSlots.includes(slot) ? ' booked' : '') +
                    (unavailableSlots.includes(slot) ? ' unavailable' : '');
                slotButton.textContent = slot;

                slotButton.addEventListener('click', function() {
                    selectedSlot = slot;
                    document.querySelectorAll('.slot-button').forEach(btn => btn.classList.remove('selected'));
                    slotButton.classList.add('selected');
                });

                timeSlotContainer.appendChild(slotButton);
            });
        } catch (error) {
            console.error('Error fetching booked slots:', error);
        }
    }

    async function fetchBookedSlots(date) {
        const response = await fetch("{{ route('fetchBookedSlots') }}", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ date: date })
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        return await response.json();
    }

    async function markSlotUnavailable(slot) {
        const date = document.getElementById('setDate').value;
        if (!date) return;

        try {
            await fetch("", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ date: date, slot: slot })
            });
        } catch (error) {
            console.error('Error marking slot unavailable:', error);
        }
    }
</script>
