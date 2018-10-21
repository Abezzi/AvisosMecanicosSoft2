<?php namespace Acoustep\EntrustGui\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as Controller;
use Acoustep\EntrustGui\Gateways\UserGateway;
use Illuminate\Http\Request;
use Watson\Validating\ValidationException;
use Illuminate\Config\Repository as Config;

use App\User;
use App\rol_user;
use App\foto_usuario;
/**
 * This file is part of Entrust GUI,
 * A Laravel 5 GUI for Entrust.
 *
 * @license MIT
 * @package Acoustep\EntrustGui
 */
class UsersController extends Controller
{

    protected $gateway;
    protected $request;
    protected $role;
    protected $config;

    /**
     * Create a new UsersController instance.
     *
     * @param Request $request
     * @param UserGateway $gateway
     * @param Config $config
     *
     * @return void
     */
    public function __construct(Request $request, UserGateway $gateway, Config $config)
    {
        $this->config = $config;
        $this->request = $request;
        $this->gateway = $gateway;
        $role_class = $this->config->get('entrust.role');
        $this->role = new $role_class;
    }

    /**
     * Display a listing of the resource.
     * GET /roles
     *
     * @return Response
     */
    public function index()
    {
        $usuarios = DB::table('users')->paginate(15);
        $users = $this->gateway->paginate($this->config->get('entrust-gui.pagination.users'));


        return view(
            'entrust-gui::users.index',
            compact(
                'users',
                'usuarios'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     * GET /roles/create
     *
     * @return Response
     */
    public function create()
    {
        
        $user_class = $this->config->get('auth.providers.users.model');
        $user2 = new $user_class;
        $roles = $this->role->pluck('name', 'id');

        return view(
            'entrust-gui::users.create',
            compact(
                'user2',
                'roles'

            )
        );
    }

    /**
     * Store a newly created resource in storage.
     * POST /roles
     *
     * @return Response
     */
    public function store(Request $request)
    {
        try {

            $user = $this->gateway->create($this->request);


            //$USAUX= User::all();
            // $ultimoUSAUX = $USAUX->last();
            $UssID = User::all()->last()->id;

            $UsuarioFinal = User::find($UssID);
            $Rolinicial = rol_user::where('user_id', $UssID)->first();
            $UsuarioFinal->role = $Rolinicial->role_id;
            $UsuarioFinal->color = "skin-blue";
            $UsuarioFinal->foto = "user2-160x160.png";

            $UsuarioFinal->save();

        } catch (ValidationException $e) {
            return redirect(route('entrust-gui::users.create'))
                ->withErrors($e->getErrors())
                ->withInput();
        }
        return redirect(route('entrust-gui::users.index'))
            ->withSuccess(trans('entrust-gui::users.created'));
  
    }

    /**
     * Show the form for editing the specified resource.
     * GET /roles/{id}/edit
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        
        
        $user2 = $this->gateway->find($id);
        $roles = $this->role->pluck('name', 'id');

        return view(
            'entrust-gui::users.edit',
            compact(
                'user2',
                'roles'
            )
        );
  
    }

    /**
     * Update the specified resource in storage.
     * PUT /roles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->gateway->update($this->request, $id);



            $UsuarioFinal = User::find($id);
            $Rolinicial = rol_user::where('user_id', $id)->first();
            $UsuarioFinal->role = $Rolinicial->role_id;

            $UsuarioFinal->save();



        } catch (ValidationException $e) {
            return back()->withErrors($e->getErrors())->withInput();
        }
        return redirect(route('entrust-gui::users.index'))
            ->withSuccess(trans('entrust-gui::users.updated'));
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /roles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

        $this->gateway->delete($id);
        return redirect(route('entrust-gui::users.index'))
            ->withSuccess(trans('entrust-gui::users.destroyed'));
    }
}
