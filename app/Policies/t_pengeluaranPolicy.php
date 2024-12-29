<?php

namespace App\Policies;

use App\Models\User;
use App\Models\t_pengeluaran;
use Illuminate\Auth\Access\Response;

class t_pengeluaranPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->can('melihat transaksi pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, t_pengeluaran $tPengeluaran): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->can('tambah transaksi pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, t_pengeluaran $tPengeluaran): bool
    {
        if ($user->can('edit transaksi pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, t_pengeluaran $tPengeluaran): bool
    {
        if ($user->can('hapus transaksi pengeluaran')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, t_pengeluaran $tPengeluaran): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, t_pengeluaran $tPengeluaran): bool
    {
        return false;
    }
}
