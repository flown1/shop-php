<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdersHistory Controller
 *
 * @property \App\Model\Table\OrdersHistoryTable $OrdersHistory
 *
 * @method \App\Model\Entity\OrdersHistory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersHistoryController extends AppController
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
        $ordersHistory = $this->paginate($this->OrdersHistory);

        $this->set(compact('ordersHistory'));
    }

    /**
     * View method
     *
     * @param string|null $id Orders History id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordersHistory = $this->OrdersHistory->get($id, [
            'contain' => ['Orders']
        ]);

        $this->set('ordersHistory', $ordersHistory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordersHistory = $this->OrdersHistory->newEntity();
        if ($this->request->is('post')) {
            $ordersHistory = $this->OrdersHistory->patchEntity($ordersHistory, $this->request->getData());
            if ($this->OrdersHistory->save($ordersHistory)) {
                $this->Flash->success(__('The orders history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orders history could not be saved. Please, try again.'));
        }
        $orders = $this->OrdersHistory->Orders->find('list', ['limit' => 200]);
        $this->set(compact('ordersHistory', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orders History id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordersHistory = $this->OrdersHistory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordersHistory = $this->OrdersHistory->patchEntity($ordersHistory, $this->request->getData());
            if ($this->OrdersHistory->save($ordersHistory)) {
                $this->Flash->success(__('The orders history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orders history could not be saved. Please, try again.'));
        }
        $orders = $this->OrdersHistory->Orders->find('list', ['limit' => 200]);
        $this->set(compact('ordersHistory', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orders History id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordersHistory = $this->OrdersHistory->get($id);
        if ($this->OrdersHistory->delete($ordersHistory)) {
            $this->Flash->success(__('The orders history has been deleted.'));
        } else {
            $this->Flash->error(__('The orders history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
