<?php

namespace Illuminate\Auth\Passwords;

trait CanResetPassword
{
    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }
}
