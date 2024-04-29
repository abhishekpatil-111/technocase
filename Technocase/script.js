    // Function to validate password and confirm password fields
    function validatePassword() {
        var password = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("cpass").value;

        // Check if passwords match
        if (password !== confirmPassword) {
            alert("Password and Confirm Password do not match.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
