<?php

namespace App\Policies;

use App\Models\Pengeluaran;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PengeluaranPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->can('melihat pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pengeluaran $pengeluaran): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->can('tambah pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pengeluaran $pengeluaran): bool
    {
        if ($user->can('edit pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pengeluaran $pengeluaran): bool
    {
        if ($user->can('hapus pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pengeluaran $pengeluaran): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pengeluaran $pengeluaran): bool
    {
        return false;
    }
}
