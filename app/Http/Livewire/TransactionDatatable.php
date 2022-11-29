<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class TransactionDatatable extends Component
{
    use WithPagination;

    public $status = true;
    public $search_keywords;
    public $sortField;
    public $sortAsc = true;
    protected $queryString = ['search_keywords', 'status', 'sortAsc'];

    public function sortBy($field) {
        if($this->sortField == $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function clearSearchKeywords() {
        $this->search_keywords = '';
        $this->sortField = '';
        $this->sortAsc = true;
    }

    public function updatingSearchKeywords()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.transaction-datatable', [
            'transactions' => Transaction::
                where('reference_code', 'like', '%'.$this->search_keywords.'%')
                // ->whereStatus($this->status)
                ->when($this->sortField, function($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc':'desc');

                })
                ->paginate(10)
        ]);
    }
}
