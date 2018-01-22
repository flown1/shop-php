<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductPurchase Controller
 *
 * @property \App\Model\Table\ProductPurchaseTable $ProductPurchase
 *
 * @method \App\Model\Entity\ProductPurchase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductPurchaseController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders']
        ];
        $productPurchase = $this->paginate($this->ProductPurchase);

        $this->set(compact('productPurchase'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Purchase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productPurchase = $this->ProductPurchase->get($id, [
            'contain' => ['Orders']
        ]);

        $this->set('productPurchase', $productPurchase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productPurchase = $this->ProductPurchase->newEntity();
        if ($this->request->is('post')) {
            $productPurchase = $this->ProductPurchase->patchEntity($productPurchase, $this->request->getData());
            if ($this->ProductPurchase->save($productPurchase)) {
                $this->Flash->success(__('The product purchase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product purchase could not be saved. Please, try again.'));
        }
        $orders = $this->ProductPurchase->Orders->find('list', ['limit' => 200]);
        $this->set(compact('productPurchase', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Purchase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productPurchase = $this->ProductPurchase->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productPurchase = $this->ProductPurchase->patchEntity($productPurchase, $this->request->getData());
            if ($this->ProductPurchase->save($productPurchase)) {
                $this->Flash->success(__('The product purchase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product purchase could not be saved. Please, try again.'));
        }
        $orders = $this->ProductPurchase->Orders->find('list', ['limit' => 200]);
        $this->set(compact('productPurchase', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Purchase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productPurchase = $this->ProductPurchase->get($id);
        if ($this->ProductPurchase->delete($productPurchase)) {
            $this->Flash->success(__('The product purchase has been deleted.'));
        } else {
            $this->Flash->error(__('The product purchase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
