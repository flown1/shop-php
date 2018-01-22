<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductReview Controller
 *
 * @property \App\Model\Table\ProductReviewTable $ProductReview
 *
 * @method \App\Model\Entity\ProductReview[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductReviewController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $productReview = $this->paginate($this->ProductReview);

        $this->set(compact('productReview'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Review id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productReview = $this->ProductReview->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productReview', $productReview);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productReview = $this->ProductReview->newEntity();
        if ($this->request->is('post')) {
            $productReview = $this->ProductReview->patchEntity($productReview, $this->request->getData());
            if ($this->ProductReview->save($productReview)) {
                $this->Flash->success(__('The product review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product review could not be saved. Please, try again.'));
        }
        $products = $this->ProductReview->Products->find('list', ['limit' => 200]);
        $this->set(compact('productReview', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productReview = $this->ProductReview->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productReview = $this->ProductReview->patchEntity($productReview, $this->request->getData());
            if ($this->ProductReview->save($productReview)) {
                $this->Flash->success(__('The product review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product review could not be saved. Please, try again.'));
        }
        $products = $this->ProductReview->Products->find('list', ['limit' => 200]);
        $this->set(compact('productReview', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productReview = $this->ProductReview->get($id);
        if ($this->ProductReview->delete($productReview)) {
            $this->Flash->success(__('The product review has been deleted.'));
        } else {
            $this->Flash->error(__('The product review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
