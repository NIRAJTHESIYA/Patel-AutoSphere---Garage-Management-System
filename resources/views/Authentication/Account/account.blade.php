<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Account Details</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-KOV+NejhGWeHIkDAldxnax0iJgm7TjvhqaW9Bm9Hm8ydIDt3T5Z9t5vCniI89IYDK5nBj2fIRlLMqx+FfBYEOQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('Authentication/Account/css/account.css') }}" />

    <style>
        .profile-picture-card.selected {
            border: 2px solid #198754;
            transform: scale(1.05);
            transition: border 0.3s, transform 0.3s;
        }

        .selected-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(25, 135, 84, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .profile-picture-card {
            position: relative;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 10px;
            overflow: hidden;
            transition: border-color 0.3s, transform 0.3s;
        }

        .profile-picture-card:hover {
            border-color: #0d6efd;
            transform: scale(1.05);
        }

        #saveProfilePictureBtn:disabled {
            cursor: not-allowed;
            opacity: 0.6;
        }

        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .img-account-profile {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 4px solid #0d6efd;
            border-radius: 50%;
        }
    </style>

</head>

<body>
    <div class="container-xl px-4 mt-5">

        <nav class="nav nav-borders mb-4">
            <a class="btn btn-outline-success ms-2" href="{{ route('Home') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
            <a class="nav-link active"
                href="{{ route('account', ['customer_id' => $customer->customer_id]) }}">Profile</a>
            <a class="nav-link" href="{{ route('order_history', ['customer_id' => $customer->customer_id]) }}">Order
                History</a>
            <a class="nav-link"
                href="{{ route('appointment_history', ['customer_id' => $customer->customer_id]) }}">Appointment
                History</a>
        </nav>

        <div class="row">
            <div class="col-xl-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        Profile Picture
                    </div>
                    <div class="card-body text-center">
                        <img id="profileImage" class="img-account-profile rounded-circle mb-3"
                            src="{{ asset('Authentication/Account/images/' . ($customer->profile_image ?? '6') . '.jpg') }}"
                            alt="Profile Picture" />
                        <br />
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                            data-bs-target="#profilePictureModal"><i class="fas fa-upload"></i>
                            Change Profile Picture
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-danger text-white">
                        Delete Account
                    </div>
                    <div class="card-body">
                        <p class="mb-3">
                            Deleting your account is a permanent action and cannot be undone. If you are sure you want
                            to delete your account, please confirm below.
                        </p>

                        <button class="btn btn-danger w-100" type="button" data-bs-toggle="modal"
                            data-bs-target="#deleteAccountModal"><i class="fas fa-trash"></i>
                            I understand, delete my account
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <span>Account Details</span>
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                id="successAlert">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
                                <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('account.update', ['id' => $customer->customer_id]) }}">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label" for="inputUsername">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input class="form-control form-control-lg @error('username') is-invalid @enderror"
                                        id="inputUsername" name="username" type="text"
                                        value="{{ old('username', $customer->customer_name) }}"
                                        placeholder="Enter your username" required />
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="inputFirstName">First Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('first_name') is-invalid @enderror"
                                            id="inputFirstName" name="first_name" type="text"
                                            value="{{ old('first_name', $customer->first_name) }}"
                                            placeholder="Enter your first name" required />
                                        @error('first_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputLastName">Last Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('last_name') is-invalid @enderror"
                                            id="inputLastName" name="last_name" type="text"
                                            value="{{ old('last_name', $customer->last_name) }}"
                                            placeholder="Enter your last name" required />
                                        @error('last_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="inputEmailAddress">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            id="inputEmailAddress" name="email" type="email"
                                            value="{{ old('email', $customer->email) }}"
                                            placeholder="Enter your email" readonly />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputPhone">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                            id="inputPhone" name="phone" type="tel"
                                            value="{{ old('phone', $customer->contact_no) }}"
                                            placeholder="Enter your phone number" required />
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="mb-4">
                                <label class="form-label" for="inputAddress">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    <input class="form-control form-control-lg @error('address') is-invalid @enderror"
                                        id="inputAddress" name="address" type="text"
                                        value="{{ old('address', $customer->address) }}" placeholder="1234 Main St"
                                        required />
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="inputCity">City</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                                        <input class="form-control form-control-lg @error('city') is-invalid @enderror"
                                            id="inputCity" name="city" type="text"
                                            value="{{ old('city', $customer->city) }}" placeholder="Enter your city"
                                            required />
                                        @error('city')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="inputPincode">Pincode</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('pincode') is-invalid @enderror"
                                            id="inputPincode" name="pincode" type="text"
                                            value="{{ old('pincode', $customer->pincode) }}"
                                            placeholder="Enter your pincode" required />
                                        @error('pincode')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-success btn-lg" type="submit"><i
                                        class="fas fa-save me-2"></i>
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="profilePictureModal" tabindex="-1" aria-labelledby="profilePictureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Choose Profile Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        @foreach ([1, 2, 3, 4, 6, 7, 8, 9] as $i)
                            <div class="col-4 col-md-3">
                                <div class="card profile-picture-card" onclick="selectProfilePicture(this)">
                                    <img src="{{ asset('Authentication/Account/images/' . $i . '.jpg') }}"
                                        class="card-img-top profile-picture-option"
                                        alt="Profile {{ $i }}">
                                    <div class="selected-overlay">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveProfilePictureBtn"
                        onclick="saveProfilePicture()" disabled>
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteAccountModalLabel">Confirm Account Deletion</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('account.delete', ['id' => $customer->customer_id]) }}"
                        onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Yes, Delete My
                            Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let selectedProfileImageSrc = '';
        let isDebouncing = false;

        function selectProfilePicture(cardElement) {
            if (isDebouncing) return;
            isDebouncing = true;

            const allCards = document.querySelectorAll('.profile-picture-card');
            allCards.forEach(card => {
                card.classList.remove('selected');
                const overlay = card.querySelector('.selected-overlay');
                overlay.style.opacity = '0';
            });

            cardElement.classList.add('selected');

            const imgElement = cardElement.querySelector('.profile-picture-option');
            selectedProfileImageSrc = imgElement.src;

            const selectedOverlay = cardElement.querySelector('.selected-overlay');
            selectedOverlay.style.opacity = '1';

            document.getElementById('saveProfilePictureBtn').disabled = false;

            setTimeout(() => {
                isDebouncing = false;
            }, 300);
        }

        function saveProfilePicture() {
            if (selectedProfileImageSrc) {
                const profileImage = document.getElementById("profileImage");
                profileImage.src = selectedProfileImageSrc;

                const allCards = document.querySelectorAll('.profile-picture-card');
                allCards.forEach(card => {
                    card.classList.remove('selected');
                    const overlay = card.querySelector('.selected-overlay');
                    overlay.style.opacity = '0';
                });

                document.getElementById('saveProfilePictureBtn').disabled = true;

                const profileModalElement = document.getElementById("profilePictureModal");
                const profileModal = bootstrap.Modal.getInstance(profileModalElement);
                profileModal.hide();
            }
        }
    </script>

    <script>
        setTimeout(() => {
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');
            if (successAlert) {
                successAlert.classList.remove('show');
                successAlert.classList.add('fade');
                setTimeout(() => {
                    successAlert.remove();
                }, 150);
            }
            if (errorAlert) {
                errorAlert.classList.remove('show');
                errorAlert.classList.add('fade');
                setTimeout(() => {
                    errorAlert.remove();
                }, 150);
            }
        }, 4000);
    </script>

    <style>
        .form-label {
            font-weight: bold;
            color: #333;
            font-size: 1rem;
        }

        .form-control {
            font-size: 1rem;
            padding: 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
        }
    </style>

</body>

</html>
