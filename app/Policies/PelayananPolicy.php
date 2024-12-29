<?php

namespace App\Policies;

use App\Models\Pelayanan;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PelayananPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->can('melihat transaksi pelayanan')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pelayanan $pelayanan): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->can('tambah transaksi pelayanan')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pelayanan $pelayanan): bool
    {
        if ($user->can('edit transaksi pelayanan')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pelayanan $pelayanan): bool
    {
        if ($user->can('hapus transaksi pelayanan')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pelayanan $pelayanan): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pelayanan $pelayanan): bool
    {
        return false;
    }
}
