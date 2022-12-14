<?php

namespace App\Traits;

use App\Models\Tenant;
use App\Scopes\TenantScope;

trait BelongsToTenant
{
    protected static function bootBelongsToTenant()
    {
        static::addGlobalScope(new TenantScope);
        
        static::creating(function($department) {
            if(session()->has('tenant_id')) {
                $department->tenant_id = session()->get('tenant_id');
            }
        });
    }

    public function tenant() {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'id');
    }
}
